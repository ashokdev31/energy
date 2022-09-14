<?php
class MY_Controller extends CI_Controller {
	private $db_auth_key = 'f00b4cc2cc64204d9bef8aadbe99a704fb60e8c3';
	/**
	 * Return Json response
	 * @param  array  $response Response array
	 * @return json
	 */
	private function response(array $response) {
		header('Content-Type: application/json');
		$json['response'] = $response;
		echo json_encode($json);
		die;
	}

	// public function __construct() {
	// 	header('Content-Type: application/json');
	// }
	/**
	 * if operation successfully performed
	 * @param  int $msg  Message t obe displayed
	 * @param  array  $data data to return with success message
	 * @return callback
	 */
	public function success($code = 200, $msg = "Success", array $data = array()) {
		return $this->response(array('code' => $code, 'success' => true, 'messages' => $msg, 'data' => $data));
	}
	/**
	 * If operation was'nt performed successfully
	 * @param  string $error Error Message
	 * @return callback
	 */
	public function error($code = 400, $messages = array()) {
		return $this->response(array('code' => $code, 'success' => false, 'messages' => $messages));
	}
	/**
	 * If operation was'nt performed successfully or required parameters was missing
	 * @param  string $request Error message
	 * @return callback
	 */
	public function badRequest($request = "") {
		return $this->response(array('code' => 400, 'success' => false, 'error' => ($request != "") ? $request : 'BAD_REQUEST'));
	}
	public function __construct() {
		parent::__construct();
		if (!empty($_SERVER['HTTP_X_API_KEY'])) {
			$auth_key = $_SERVER['HTTP_X_API_KEY'];
			if ($this->db_auth_key != $auth_key) {
				return $this->error(403, 'Authentication Error');
			}
		} else {
			return $this->error(403, 'Authentication Error');
		}

	}

}

/**
 *class for superadmin panel
 */
class SA_Controller extends CI_Controller {

	private $deviceToken = null;
	protected $key = null;

	public function __construct() {
		parent::__construct();
		$this->key = $this->config->config['api']['key'];
	}

	public function getUser($uid) {
		return $this->db->get_where('users', array('id' => $uid))->result();
	}

	public function groupBy($array, $key) {
		$res = [];
		foreach ($array as $value):
			if (!isset($res[$value[$key]])) {
				$res[$value[$key]] = array();
			}
			$res[$value[$key]][] = array_slice($value, 0);
		endforeach;
		return $res;
	}

	private function ios($payload) {
		$ctx = stream_context_create();
		stream_context_set_option($ctx, 'ssl', 'cafile', __DIR__ . '/entrust_2048_ca.cer');
		stream_context_set_option($ctx, 'ssl', 'verify_peer', false);
		stream_context_set_option($ctx, 'ssl', 'local_cert', __DIR__ . '/pushLwpApp.pem'); //development
		stream_context_set_option($ctx, 'ssl', 'passphrase', $this->passPhrase);
		// stream_context_set_option($ctx, 'ssl', 'passphrase', '');
		// stream_context_set_option($ctx, 'ssl', 'verify_peer', false);
		$fp = stream_socket_client('ssl://gateway.sandbox.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx); //sandbox
		// $fp = stream_socket_client('ssl://gateway.push.apple.com:2195', $err, $errstr, 60, STREAM_CLIENT_CONNECT | STREAM_CLIENT_PERSISTENT, $ctx); //live
		$body['aps'] = $payload;
		$payload = json_encode($body);
		$msg = chr(0) . pack('n', 32) . pack('H*', $this->deviceToken) . pack('n', strlen($payload)) . $payload;
		$result = fwrite($fp, $msg, strlen($msg));
		fclose($fp);
	}

	private function android($payload) {
		$headers = array('Authorization: key=' . $this->key, 'Content-Type: application/json');
		$fields = array(
			'registration_ids' => array($this->deviceToken),
			'data' => $payload,
		);
		try {
			$result = array();
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
			$result = json_decode(curl_exec($ch), true);
			curl_close($ch);
		} catch (Exception $e) {
			//
		}
	}

	public function pushNotif($uid, $payload, $iosPayload) {
		$user = $this->getUser($uid);
		if (count($user) > 0) {
			$deviceType = trim($user[0]->device_type);
			$deviceToken = trim($user[0]->device_token);
			if ($deviceToken != "" && in_array($deviceType, array('iOS', 'android'))) {
				$this->deviceToken = $deviceToken;
				if ($deviceType === "iOS") {
					//$this->ios($iosPayload);
				} elseif ($deviceType === "android") {
					$this->android($payload);
				}
			}
		}
	}
	public function saveNotification($senderId, $receiverId, $type, $message) {
		$saveNoti = array(
			'sender_id' => $senderId,
			'receiver_id' => $receiverId,
			'type' => $type,
			'message' => $message,
			'created_date' => date('Y-m-d H:i:s'),
		);
		$this->db->insert('notification', $saveNoti);
	}
}