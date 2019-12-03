<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->onSession();
		$this->load->model('admin_model', 'mydb');
		$this->load->helper('form');
	}
	public function onSession(){
		if($this->session->userdata('status')){
			redirect('admin');
		}
	}
	public function index()
	{
		if($this->input->post()){
			if($this->mydb->confirmAccount()>0){
				$this->session->set_userdata('status','on');
				redirect('admin');
			}else{
				redirect('login');
			}
		}else{
			$this->load->view('login');
		}
	}
}
