<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $title = 'Dashboard';
	public $dashboard_title = false;

	function __construct() {
		parent::__construct();
		$this->load->model("admin/Home_model");
		$this->load->library('session');
	}

	//add content
	public function add() {
		$this->load->view('backend/home/create');
	}

	public function create() {

		if ($this->input->post()) {
			$data = array(
				'home_title' => $this->input->post('home_title'),
				'home_content' => $this->input->post('home_content'),
			);
		}

		$insert_id = $this->Home_model->formInsert($data);
		if (count($insert_id)) {
			$this->session->set_flashdata('esucess', 'Content Added Successfully');
			redirect('home/homelist');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong');
			redirect('home/add');
		}

	}

	public function update($id = NULL) {
		$data['query'] = $this->Home_model->viewContent($id);
		$this->load->view('backend/home/update', $data);

	}

	public function edit($id) {
		$data['id'] = $this->input->post('id');
		$data['page_menu'] = $this->input->post('page_menu');
		$data['page_title'] = $this->input->post('page_title');
		$data['content'] = $this->input->post('content');
		$user_info = $this->Home_model->update($data);
		$this->session->set_flashdata('esucess', 'Content Updated Successfully');
		redirect('home/homelist/' . $data['id']);

	}

	public function delete($id = NULL) {
		$this->Home_model->deleteContent($id);
		redirect('home/homelist');
	}

	//Get list
	public function homelist($id = NULL) {
		$this->dashboard_title = 'Dashboard';
		$data['query'] = $this->Home_model->getlist($id);
		$this->load->view('backend/home/list', $data);
	}

	public function enabledisablePage($id) {
		$status = $this->input->post('status');
		$data['query'] = $this->Home_model->disableEnablePage($id, $status);
		redirect('admin/dashboard');

	}
}
