<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $title = 'Dashboard';
	public $dashboard_title = false;

	function __construct() {
		parent::__construct();
		$this->load->model("admin/Admin_model");
		$this->load->model("admin/Home_model");
		$this->load->library('session');

	}

	public function index() {
		if ($this->session->userdata('login_type')) {
			redirect(base_url() . 'admin/dashboard', 'refresh');
		}

		redirect(base_url() . 'admin/login', 'refresh');
	}

	//Login
	public function login() {
		if ($this->session->userdata('login_type')) {
			redirect(base_url() . 'admin/dashboard', 'refresh');
		}

		$this->load->view('backend/admin/login');

	}

	//checkLogin
	public function checkLogin() {

		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));
		$check_login = $this->Admin_model->checkAdminLogin($email, $password);
		if (count($check_login) == 1) {
			$this->session->set_userdata('admin_login', '1');
			$this->session->set_userdata('login_user_id', $check_login[0]->id);
			$this->session->set_userdata('name', $check_login[0]->name);
			$this->session->set_userdata('login_type', 'admin');
			redirect(base_url() . 'admin/dashboard', 'refresh');
		} else {
			$this->session->set_flashdata('invalid_login', 'Invalid Email/Password.');
			redirect(base_url() . 'admin/login', 'refresh');

		}
	}

	//Dashboard
	public function dashboard() {

		if ($this->session->userdata('login_type') != 'admin') {
			redirect(base_url() . 'admin/login', 'refresh');
		} else {
			$data['content'] = $this->Home_model->getDashboardContent();
			$this->dashboard_title = 'Dashboard';
			$this->load->view('backend/admin/index', $data);
		}
	}

	//Logout
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url() . 'admin/login', 'refresh');
	}

}
