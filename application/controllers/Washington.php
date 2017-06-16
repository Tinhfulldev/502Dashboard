<?php if(!defined('BASEPATH')) exit('no direct access script allowed');

class Washington extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('session');

			// to protect the controller to be accessed only by registered users
		    if(!$this->session->userdata('logged_in')){
					redirect('login', 'refresh');
			}

	}

	public function index() {
		//to display dashboard page as default.
			$data['content'] = 'dashboard';
			$this->load->view('base_view', $data);

	}

	public function dashboard() {
		//to display when selected dashboard page.
			$data['content'] = 'dashboard';
			$this->load->view('base_view', $data);
	}

	public function newsfeed() {
		//to display when selected newsfeed page.
			$data['content'] = 'newsfeed';
			$this->load->view('base_view', $data);
	}

}
