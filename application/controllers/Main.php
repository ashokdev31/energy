<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public $title = 'Dashboard';
	function __construct() {
		parent::__construct();
		$this->load->model("admin/Admin_model");
		$this->load->model("admin/Home_model");
		$this->load->library('session');
		$this->load->library(array('form_validation', 'email'));

	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {

		if (isset($_SESSION['admin_login'])) {

			redirect(base_url() . 'admin/dashboard', 'refresh');

		} else {
			$data['query'] = $this->Home_model->getPagecontent();
			$this->load->view('frontend/index', $data);
		}

	}

	public function careers() {

		$data['query'] = $this->Home_model->getPagecontent();
		$this->load->view('frontend/careers', $data);
	}

	public function contactUs() {

		$data['query'] = $this->Home_model->getPagecontent();
		$this->load->view('frontend/contactus', $data);
	}

	public function contact() {
		if ($this->input->post()) {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			$to_email = 'agisemonger@gmail.com';

			$this->email->from($email, $name);
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($message);
			if ($this->email->send()) {
				// mail sent
				$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Your mmessage has been sent successfully!</div>');
				redirect('main/contactUs');
			} else {
				//error
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">There is error in sending mail! Please try again later</div>');
				redirect('main/contactUs');
			}

		}
	}
}
