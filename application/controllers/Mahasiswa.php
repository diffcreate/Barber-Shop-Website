<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_mahasiswa');
		}
		
	public function index()
	{
	$data['nama_mahasiswa']= '';
	$data['dosen'] = array(
	array(
	'niy' => '60110648',
	'nama' => 'Herman Yuliansyah',
	'alamat' => 'Jogjakarta'
	),
	array(
	'niy' => '60110647',
	'nama' => 'Fiftin Noviyanto',
	'alamat' => 'Sleman'
	),
	array(
	'niy' => '60110649',
	'nama' => 'Supriyanto',
	'alamat' => 'Jogja'
	 ),
	);
	
	$data['data_mahasiswa'] = $this->m_mahasiswa->data_mahasiswa();
	$this->load->view('view_mahasiswa.php', $data);
	}


	function tambah()
	{
		$this->load->view('v_tambah_mahasiswa'); 
	}

function simpan_mahasiswa()
{
	$data = array(
		'nim'=>$this->input->post('nim'),
		'nama'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat'),
	
	);
	$this->db->insert('mahasiswa',$data);
	redirect('Mahasiswa/index');
}

function update($id)
{
	$data['ambil']=$this->m_mahasiswa->Getid($id);
	$this->load->view('v_update_mahasiswa',$data);
}

function simpan_update()
{
	$data = array(

		'nim'=>$this->input->post('nim'),
		'nama'=>$this->input->post('nama'),
		'alamat'=>$this->input->post('alamat'),
		
	);
	$nim = $this->input->post('id');
	$this->db->where('id', $id);
	$this->db->update('mahasiswa',$data);
	redirect('Mahasiswa');
}

function hapus($id)
{
	$this->m_mahasiswa->HapusMahasiswa($id);
	redirect('Mahasiswa');
}
	}
