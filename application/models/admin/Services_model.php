<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function getlist($where = NULL) {

		$this->db->select('id, services_title ,services_content, created_date');
		$this->db->from('hb_services');
		if ($where) {
			$this->db->where($where);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0):
			return $query->result();
		endif;
	}

	function formInsert($data) {
		$this->db->insert('hb_services', $data);
		$insert_id = $this->db->insert_id();
		if (count($insert_id == 1)) {
			return $insert_id;
		} else {
			return 0;
		}
	}

	public function countContent() {
		return $this->db->query("select count('*') as count FROM `hb_services`")->row();

	}

	function update($data) {
		$this->db->where('id', $data['id']);
		$this->db->update('hb_services', $data);
	}

	function viewContent($id) {
		$this->db->select('id, services_title, services_content');
		$this->db->from('hb_services');
		$this->db->where('hb_services.id', $id);
		return $this->db->get()->result();
	}

	function deleteContent($id) {
		$this->db->where('id', $id);
		$this->db->delete('hb_services');
	}

}
