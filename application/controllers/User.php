<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 	public function __construct(){
 		parent::__construct();
		$this->load->helper('cookie');
 		$this->load->helper('url');
 		$this->load->model('user_model', 'mydb');
 	}
	public function index()
	{
		if($this->input->cookie('kode')){
			$this->load->view('user/default', array('data'=>$this->mydb->getCalon()));
			$this->load->view('core/footer');
		}else{
			redirect('user/login');
		}
	}
	public function login()
	{

		if(!$this->input->cookie('kode')){
				$script = '';
			if($this->input->post('kode')){

				if($this->mydb->cekKode() == 2){
							
					$cookie = array(
					    'name'   => 'kode',
					    'value'  => $this->input->post('kode'),
					    'expire' => '86500'
					);
					$this->input->set_cookie($cookie);
					redirect('user');
				}elseif($this->mydb->cekKode() == 4){
					$script = "<script>alert('kode yang anda masukan telah digunakan')</script>";
				}else{
					$script = "<script>alert('kode yang anda masukan salah')</script>";
				}
			}
			$this->load->helper('form');
			$this->load->view('user/login', array('alert' => $script));
			$this->load->view('core/footer');
		}else{
			redirect('user');	
		}
	}
	public function set_pemilih(){
		$data = $this->mydb->updateCalonOn();
		delete_cookie('kode');
		redirect('user/login');
	}
}
