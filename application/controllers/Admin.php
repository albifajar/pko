<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->library('session');
		$this->load->helper('url');
		$this->onSession();
		$this->load->model('admin_model', 'mydb');
	}
	public function onSession(){
		if(!$this->session->userdata('status')){
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('core/header_admin');
		$this->load->view('core/menu_admin');
		$this->load->view('admin/dashboard');
		$this->load->view('core/footer_admin');
	
	}
	public function pemilih()
	{
		$data['data'] = $this->mydb->getPemilih();
		$this->load->view('core/header_admin');
		$this->load->view('core/menu_admin');
		$this->load->view('admin/tampilan_pemilih', $data);
		$this->load->view('core/footer_admin');
	}
	public function tambah_kode()
	{
		if($this->input->post('codes')){
			$this->mydb->createOnTablePemilih();
			redirect('admin/pemilih');
		}
		$this->load->helper('form');
		$data['kode'] = $this->mydb->createPemilih();
		$data['allkode'] = implode(';', $data['kode']);
		$this->load->view('core/header_admin');
		$this->load->view('core/menu_admin');
		$this->load->view('admin/tambah_kode', $data);
		$this->load->view('core/footer_admin');
	}
	public function tambah_calon()
	{
		$this->load->helper('form');
		if($this->input->post()){
			$this->mydb->tambahCalon();
		}
		$this->load->view('core/header_admin');	
		$this->load->view('core/menu_admin');		
		$this->load->view('admin/tambah_calon');
		$this->load->view('core/footer_admin');
	}
	public function tampil_calon()
	{
		$this->load->view('core/header_admin');	
		$this->load->view('core/menu_admin');
		$this->load->view('core/footer_admin');
	}
	public function statistik(){
		$this->load->view('core/header_admin');
		$this->load->view('core/menu_admin');
		$this->load->view('admin/statistik', array('data' => $this->mydb->dataStatistik()));
		$this->load->view('core/footer_admin');
	}
	public function keluar(){
		session_destroy();
		redirect('login');
	}
}
