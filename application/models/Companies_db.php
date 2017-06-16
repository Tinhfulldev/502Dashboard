<?php defined('BASEPATH') OR exit('No direct script access allowed');
//Model for Company
Class Companies_db extends CI_Model {

	public function __construct() {

		parent::__construct();
		$this->load->database();

	}

	//getting washington's company name list
  function get_wa_companies() {

		$this->db->select('*');
		$this->db->from('biotrackthc_locations');
		$this->db->order_by('name', 'asc');
		$query = $this->db->get();
		return $query->result_array();

	}

	//getting selected washington's company data
	function get_select_company($license){

		$this->db->select('*');
		$this->db->from('biotrackthc_locations');
		$this->db->where('licensenum ='.$license);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->result();

	}

	//getting sales data of selected comapny
	function get_sales($license){

		$this->db->select_sum('saleprice', 'Saleprice');
		$this->db->from('biotrackthc_inventorytransfers');
		$this->db->where('outbound_license ='.$license);
		$query = $this->db->get();
		$result = $query->result();
		return $result[0]->Saleprice;

	}

}
