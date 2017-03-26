<?php 

if(!defined('BASEPATH')) exit ('No direct script access allowed.');

class Product extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		
	}
	
	public function search() {
		$page = 'search';
		
		$data['title'] = 'Search';
		
		$search_query = $this->input->post('home-search');
		
		
		
		$this->load->view('templates/header', $data);
		$this->load->view('product/' . $page, $data);
		$this->load->view('templates/footer');
	}
	
}