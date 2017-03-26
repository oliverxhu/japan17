<?php 

if(!defined('BASEPATH')) exit ('No direct script access allowed.');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		
		$this->load->helper(array('form','url'));
		$this->load->library('form_validation');
		
	}
	
	public function index() {
		$page = 'home';
		
		$data['title'] = 'Japan Trip';
		$data['test'] = 'hello';
		
		$this->load->view('templates/header', $data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer', $data);
		
	}
	
}