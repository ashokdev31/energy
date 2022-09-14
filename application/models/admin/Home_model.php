<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function getlist($id) {

		return $this->db->query('select id, page_menu, status, content from hb_contents where id ="' . $id . '"')->result_array();

	}

	function formInsert($data) {
		$this->db->insert('hb_home', $data);
		$insert_id = $this->db->insert_id();
		if (count($insert_id == 1)) {
			return $insert_id;
		} else {
			return 0;
		}
	}

	function update($data) {
		$this->db->where('id', $data['id']);
		$this->db->update('hb_contents', $data);
	}

	function viewContent($id) {
		$this->db->select('id, page_menu, page_title, content');
		$this->db->from('hb_contents');
		$this->db->where('hb_contents.id', $id);
		return $this->db->get()->result_array();
	}

	function deleteContent($id) {
		$this->db->where('id', $id);
		$this->db->delete('hb_home');
	}

	public function getDashboardContent() {

		$this->db->select('id , page_menu, status');
		$this->db->from('hb_contents');
		return $this->db->get()->result_array();
	}

	public function disableEnablePage($id, $status) {

		if ($status == 1) {
			return $this->db->query('update hb_contents SET status= 0 WHERE  id = "' . $id . '"');
		} else {
			return $this->db->query('update hb_contents SET status= 1 WHERE  id = "' . $id . '"');

		}
	}

	public function getPagecontent() {

		return $this->db->query('select id, page_menu, page_title, content, page_slug from hb_contents where status = 1')->result_array();

	}

}
