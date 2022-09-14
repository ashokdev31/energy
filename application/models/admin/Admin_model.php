<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}


	public function checkAdminLogin($email, $password){

		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$this->db->where('status', 1);
		$query = $this->db->get('admin');
		$result = $query->result();
		return $result;
	}





}	

