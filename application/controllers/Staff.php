<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public $title = 'Staff';
	public $dashboard_title = false;

	function __construct() {
		parent::__construct();
		$this->load->model("admin/Staff_model");
		$this->load->library('session');
	}

	//add content
	public function add() {
		$this->load->view('backend/staff/create');
	}

	public function create() {

		if ($this->input->post()) {
			$data = array(
				'staff_title' => $this->input->post('staff_title'),
				'staff_content' => $this->input->post('staff_content'),
			);
		}

		$insert_id = $this->Staff_model->formInsert($data);
		if (count($insert_id)) {
			$this->session->set_flashdata('esucess', 'Content Added Successfully');
			redirect('staff/stafflist');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
			redirect('staff/add');
		}

	}

	public function update($id = NULL) {
		$data['query'] = $this->Staff_model->viewContent($id);
		$this->load->view('backend/staff/update', $data);

	}

	public function edit() {

		$data['id'] = $this->input->post('id');
		$data['staff_title'] = $this->input->post('staff_title');
		$data['staff_content'] = $this->input->post('staff_content');
		$user_info = $this->Staff_model->update($data);
		$this->session->set_flashdata('esucess', 'Content Updated Successfully');
		redirect('staff/stafflist');

	}

	public function delete($id = NULL) {
		$this->Staff_model->deleteContent($id);
		redirect('staff/stafflist');
	}

	//Get list
	public function stafflist() {
		$this->dashboard_title = 'Staff';
		$data['count'] = $this->Staff_model->countContent();
		$data['query'] = $this->Staff_model->getlist();
		$this->load->view('backend/staff/list', $data);
	}

}
