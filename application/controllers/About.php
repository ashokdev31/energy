<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public $title = 'About';
	public $dashboard_title = false;

	function __construct() {
		parent::__construct();
		$this->load->model("admin/About_model");
		$this->load->library('session');
	}

	//add content
	public function add() {
		$this->load->view('backend/about/create');
	}

	public function create() {

		if ($this->input->post()) {
			$data = array(
				'about_title' => $this->input->post('about_title'),
				'about_content' => $this->input->post('about_content'),
			);
		}

		$insert_id = $this->About_model->formInsert($data);
		if (count($insert_id)) {
			$this->session->set_flashdata('esucess', 'Content Added Successfully');
			redirect('about/aboutlist');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
			redirect('about/add');
		}

	}

	public function update($id = NULL) {
		$data['query'] = $this->About_model->viewContent($id);
		$this->load->view('backend/about/update', $data);

	}

	public function edit() {

		$data['id'] = $this->input->post('id');
		$data['about_title'] = $this->input->post('about_title');
		$data['about_content'] = $this->input->post('about_content');
		$user_info = $this->About_model->update($data);
		$this->session->set_flashdata('esucess', 'Content Updated Successfully');
		redirect('about/aboutlist');

	}

	public function delete($id = NULL) {
		$this->About_model->deleteContent($id);
		redirect('about/aboutlist');
	}

	//Get list
	public function aboutlist() {
		$this->dashboard_title = 'About';
		$data['count'] = $this->About_model->countContent();
		$data['query'] = $this->About_model->getlist();
		$this->load->view('backend/about/list', $data);
	}

}
