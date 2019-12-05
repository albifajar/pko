<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	public function confirmAccount(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->db->query("SELECT * FROM akun WHERE username='$username' AND password='$password'");
		return $this->db->affected_rows();
	}
	//Mengambil data dari tabel pilih
	public function getPemilih(){
		$data = $this->db->query('SELECT kode_unik, status_kode FROM pemilih')
					->result_array();
		$terpakai = 0;
		$belum_terpakai = 0;
		for ($i=0; $i < count($data); $i++) { 
			if($data[$i]['status_kode'] > 0){
			$data[$i]['status_kode'] = '<span class="border border-success text-success py-1 px-2 rounded">Terpakai</span>';
			$terpakai++;
			}else{
			$data[$i]['status_kode'] = '<span class="border border-danger text-danger py-1 px-2 rounded">Belum Terpakai</span>';
			$belum_terpakai++;
			}
		}
		$data['belum_terpakai'] = $belum_terpakai;
		$data['terpakai'] = $terpakai;
		return $data;
	}
	//Tambah data table 'pilih' berisi kode unik 
	public function createOnTablePemilih(){
		$data = explode(";", $this->input->post('codes'));
		$jml = 0;
		for ($i=0; $i < count($data); $i++) { 
		$this->db->query("INSERT INTO pemilih VALUES ('','$data[$i]',0)");
		$jml += $this->db->affected_rows();
		}
		return $jml;
	}
	//menentukan jumlah kode unik yang di butuhkan
	public function createPemilih(){
		if($this->input->get('jmlh')){
		$array = array();
		for($i=0;$i<$this->input->get('jmlh');$i++){

		$array[$i] = $this->valueRandom(7);
		}
		return $array;
	}else{
		return array();
	}
	}
	/*menghasilkan kode acak/kode unik
	/*dengan memasukan parameter bertype int
	*/
	private function valueRandom($angka){
		$string = '';
		$karakter = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz";
		$data = array();
		for($i=0;$i<$angka;$i++){

			$post = rand(0, strlen($karakter)-1);
			$string .= $karakter{$post};
		}
		return $string;
	}
	//Menambah data tabel calon
	public function tambahCalon(){
		$nama[0] = $this->input->post('nama_k');
		$nama[1] = $this->input->post('nama_wk');
		$nama = implode('&&', $nama);

		$array = array(
			'nama' => $nama,
			'kelas' => 'alfa',
			'visi' => $this->input->post('visi'),
			'misi' => $this->input->post('misi'),
			'nomor' => $this->input->post('nomor'),
			'gambar' => $this->do_upload('gambar')
		);
		$this->db->insert('calon', $array);
		return var_dump($array);
	}
	public function do_upload($data){
        $config['upload_path']          = './uploads/img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']			= $this->valueRandom(10);
        $config['max_size']             = 1024;

        $this->load->library('upload', $config);

        if ( $this->upload->do_upload($data)){
        	return $this->upload->data('file_name');
        }else{
        	return 'profile.jpg';
        }
    }
    public function dataStatistik(){
    	$calon = $this->db->query("SELECT nama, jumlah_pemilih FROM calon")
    		 ->result_array();
    	$data = array();
    	for ($i=0; $i < count($calon); $i++) { 
			$data['nama'][$i] = implode(' dan ',explode('&&', $calon[$i]['nama']));
			$data['nama'][$i] = "'".$data['nama'][$i]."'";
			$data['jumlah_pemilih'][$i] = "'".$calon[$i]['jumlah_pemilih']."'";	
    	}
    	$data['nama'] = implode(', ', $data['nama']);
    	$data['jumlah_pemilih'] = implode(', ', $data['jumlah_pemilih']);
    	return $data;
    }
}
