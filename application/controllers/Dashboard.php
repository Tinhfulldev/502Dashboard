<?php if(!defined('BASEPATH')) exit('no direct access script allowed');



class Dashboard extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');

		//$this->load->library('session');

		$this->load->model('Companies_db');
		$this->load->library('session');

	}

	public function index() {
		$data_to_view['companies'] = $this->Companies_db->get_wa_companies();
		$this->load->view('dashboard', $data_to_view);



	}
	public function select_company( $license = NULL) {


		$data_to_view['companies'] = $this->Companies_db->get_wa_companies();
		$data_to_view['select_company'] = $this->Companies_db->get_select_company( $license );
		$data_to_view['select_company_sales'] = $this->Companies_db->get_sales( $license );

		$this->load->view('dashboard', $data_to_view);



	}


}
