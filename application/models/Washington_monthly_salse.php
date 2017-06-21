<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Washington_monthly_salse extends CI_Model {

  public function __construct() {
    parent::__construct();
    $this->load->database();

  }


  function get_wa_monthly_salse(){

    $this->db->select('*');
		$this->db->from('');
    $this->db->where('');
		$this->db->order_by('name', 'asc');
		$query = $this->db->get();
		return $query->result_array();
  }
}
