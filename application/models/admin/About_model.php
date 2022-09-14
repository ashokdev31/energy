<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function getlist($where = NULL) {

		$this->db->select('id, about_title ,about_content, created_date');
		$this->db->from('hb_about');
		if ($where) {
			$this->db->where($where);
		}
		$query = $this->db->get();

		if ($query->num_rows() > 0):
			return $query->result();
		endif;
	}

	function formInsert($data) {
		$this->db->insert('hb_about', $data);
		$insert_id = $this->db->insert_id();
		if (count($insert_id == 1)) {
			return $insert_id;
		} else {
			return 0;
		}
	}

	public function countContent() {
		return $this->db->query("select count('*') as count FROM `hb_about`")->row();

	}

	function update($data) {
		$this->db->where('id', $data['id']);
		$this->db->update('hb_about', $data);
	}

	function viewContent($id) {
		$this->db->select('id, about_title, about_content');
		$this->db->from('hb_about');
		$this->db->where('hb_about.id', $id);
		return $this->db->get()->result();
	}

	function deleteContent($id) {
		$this->db->where('id', $id);
		$this->db->delete('hb_about');
	}

}
