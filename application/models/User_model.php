<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	public function cekKode(){
		$kode = $this->input->post('kode');
		$hasil = $this->db->query("SELECT status_kode FROM pemilih WHERE kode_unik = '$kode'")
					  ->result_array();
		if($this->db->affected_rows() == 0){
			return 0;
		}elseif($hasil[0]['status_kode'] == 0){
			return 2;
		}else{
			return 4;
		}
	}
	public function getCalon(){

		$data = $this->db->query("SELECT * FROM calon ORDER BY nomor ASC")
			 ->result_array();
		for ($i=0; $i < count($data); $i++) { 
			$data[$i]['nama'] = explode('&&', $data[$i]['nama']);
			$data[$i]['kelas'] = explode('&&', $data[$i]['kelas']);
			$data[$i]['gambar'] = explode('&&', $data[$i]['gambar']);
		}
		return $data;
	}
	public function updateCalonOn(){
		$data = array(
			'kode_unik' => $this->input->get('id'),
			'status_kode' => 1
		);

		$this->db->where('kode_unik', $this->input->get('id'));
		$this->db->update('pemilih', $data);
		$id_calon = $this->input->get('on');
		$poin = $this->db->query("SELECT jumlah_pemilih FROM calon WHERE id_calon = '$id_calon'")->result_array()[0]['jumlah_pemilih'];
		$poin++;
		$data = array(
			'jumlah_pemilih' => $poin
		);
		$this->db->where('id_calon', $id_calon);
		return $this->db->update('calon', $data);		
	}
}
