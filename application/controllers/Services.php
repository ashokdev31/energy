<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

	public $title = 'Services';
	public $dashboard_title = false;

	function __construct() {
		parent::__construct();
		$this->load->model("admin/Services_model");
		$this->load->library('session');
	}

	//add content
	public function add() {
		$this->load->view('backend/services/create');
	}

	public function create() {

		if ($this->input->post()) {
			$data = array(
				'services_title' => $this->input->post('services_title'),
				'services_content' => $this->input->post('services_content'),
			);
		}

		$insert_id = $this->Services_model->formInsert($data);
		if (count($insert_id)) {
			$this->session->set_flashdata('esucess', 'Content Added Successfully');
			redirect('services/serviceslist');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
			redirect('services/add');
		}

	}

	public function update($id = NULL) {
		$data['query'] = $this->Services_model->viewContent($id);
		$this->load->view('backend/services/update', $data);

	}

	public function edit() {

		$data['id'] = $this->input->post('id');
		$data['services_title'] = $this->input->post('services_title');
		$data['services_content'] = $this->input->post('services_content');
		$user_info = $this->Services_model->update($data);
		$this->session->set_flashdata('esucess', 'Content Updated Successfully');
		redirect('services/serviceslist');

	}

	public function delete($id = NULL) {
		$this->Services_model->deleteContent($id);
		redirect('services/serviceslist');
	}

	//Get list
	public function serviceslist() {
		$this->dashboard_title = 'Services';
		$data['count'] = $this->Services_model->countContent();
		$data['query'] = $this->Services_model->getlist();
		$this->load->view('backend/services/list', $data);
	}

}
