<?php 
if(!defined('BASEPATH')) exit('No direct script access allowed.');

class Product_model extends CI_Model {
	
/*
 * ------------------------------------------------------------------------------
 * This class contains 3 sections:
 * 1) Querying Functions
 * 2) Writing to Table Functions
 * 3) Other Functions
 * ------------------------------------------------------------------------------
 */ 
  
	public function __construct() {
		parent::__construct();
		
		$this->load->database();
		$this->load->helper('url');
		$this->load->helper('functions');
		set_timezone();
	}
	
/* --------------------------- Querying Functions --------------------------- */	

	public function select_row($table, $where_array) {
		$query = $this->db->get_where($table, $where_array);
		
		return $query->row();
	}

	public function select_result($table, $where_array) {
		$query = $this->db->get_where($table, $where_array);
		
		return $query->row();
	}
}