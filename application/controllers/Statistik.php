<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('admin_model', 'mydb');
	}
	public function index()
	{
	
		$this->load->view('statistik', array('data' => $this->mydb->dataStatistik()));
	}
}
