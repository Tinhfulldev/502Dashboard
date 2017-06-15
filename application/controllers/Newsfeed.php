<?php if(!defined('BASEPATH')) exit('no direct access script allowed');



class Newsfeed extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->helper('url');

		//$this->load->library('session');

		$this->load->model('Companies_db');
		$this->load->library('session');

	}

	public function index() {

		$this->load->view('newsfeed');

	}

}
