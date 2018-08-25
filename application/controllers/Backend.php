<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class backend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(($this->session->userdata('status')) != "Login"){
			redirect(base_url("login"));
		}
		
		$this->load->model('Mjabatan');
		$this->load->model('Mpegawai');
		$this->load->model('Mperiode');
		$this->load->model('Mpalru');
		$this->load->model('Mperilaku');
		$this->load->model('Mlembaga');

	}

	//index halaman utama

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['page'] = 'backend/dashboard/index';
		$this->load->view('backend/index', $data);
	}

	// Jabatan
	public function jabatan()
	{
		$data['title'] = 'Jabatan';
		$data['page'] = 'backend/jabatan/index';
		$data['data'] = $this->Mjabatan->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function tambah_jabatan()
	{
		$data['title'] = 'Jabatan';
		$data['page'] = 'backend/jabatan/add';
		$this->load->view('backend/index', $data);
	}

	function insert_jabatan()
	{
		if (isset($_POST['submit'])) {
			$object = array('nama_jabatan' => $this->input->post('nama_jabatan'));
			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mjabatan->save($object);
			redirect('backend/jabatan');
		} else {
			redirect('backend/jabatan');
		}

	}

	public function tampil_ubah_jabatan($id)
	{
		$data['title'] = 'Jabatan';
		$data['page'] = 'backend/jabatan/edit';
		$data['data'] = $this->Mjabatan->tampil_ubah($id)->result();
		$this->load->view('backend/index', $data);
	}

	function edit_jabatan()
	{
		if (isset($_POST['submit'])) {
			$id = $this->input->post('id_jabatan');
			$object = array('nama_jabatan' => $this->input->post('nama_jabatan'));

			// Untuk menangani serangan XSS
			$this->Mjabatan->update($id, $object);
			$object = $this->security->xss_clean($object);
			redirect('backend/jabatan');
		} else {
			redirect('backend/jabatan');
		}

	}

	function delete_jabatan($id) {
		$this->Mjabatan->delete($id);
		redirect('backend/jabatan');
	}

	public function laporan_jabatan(){
		$data['title'] = 'Laporan Jabatan';
		$data['page'] = 'backend/jabatan/laporan/index';
		$data['data'] = $this->Mjabatan->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function cetak_jabatan()
	{
		$data['title'] = 'Laporan Jabatan';
		$data['data'] = $this->Mjabatan->view()->result();
		$this->load->view('backend/jabatan/laporan/print', $data);
	}


	//Pegawai
	public function pegawai()
	{
		$data['title'] = 'Pegawai';
		$data['page'] = 'backend/pegawai/index';
		$data['data'] = $this->Mpegawai->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function tambah_pegawai()
	{
		$data['title'] = 'Pegawai';
		$data['page'] = 'backend/pegawai/add';
		$this->load->view('backend/index', $data);
	}

	function insert_pegawai()
	{
		if (isset($_POST['submit'])) {
			$object = array(
				'nama_pegawai' 			=> $this->input->post('nama_pegawai'),
				'nip_pegawai' 			=> $this->input->post('nip_pegawai'),
				'email_pegawai'			=> $this->input->post('email_pegawai'),
				'password_pegawai' 		=> $this->input->post('password_pegawai'),
				'id_palru' 				=> $this->input->post('id_palru'),
				'id_jabatan' 			=> $this->input->post('id_jabatan'),
				'status_pegawai' 		=> $this->input->post('status_pegawai'),
				'aktif_pegawai' 		=> $this->input->post('aktif_pegawai')
			);
			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mpegawai->save($object);
			redirect('backend/pegawai');
		} else {
			redirect('backend/pegawai');
		}

	}

	public function tampil_ubah_pegawai($id)
	{
		$data['title'] = 'Pegawai';
		$data['page'] = 'backend/pegawai/edit';
		$data['data'] = $this->Mpegawai->tampil_ubah($id)->result();
		$this->load->view('backend/index', $data);
	}

	function edit_pegawai()
	{
		if (isset($_POST['btnupdate'])) {
			$id_pegawai = $this->input->post('id_pegawai');
			$object = array(
				'nama_pegawai' 			=> $this->input->post('nama_pegawai'),
				'nip_pegawai' 			=> $this->input->post('nip_pegawai'),
				'email_pegawai'			=> $this->input->post('email_pegawai'),
				'password_pegawai' 		=> $this->input->post('password_pegawai'),
				'id_palru' 				=> $this->input->post('id_palru'),
				'id_jabatan' 			=> $this->input->post('id_jabatan'),
				'status_pegawai' 		=> $this->input->post('status_pegawai'),
				'aktif_pegawai' 		=> $this->input->post('aktif_pegawai')
			);

			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mpegawai->update($id_pegawai, $object);
			redirect('backend/pegawai');
		} else {
			redirect('backend/pegawai');
		}

	}

	function delete_pegawai($id) {
		$this->Mpegawai->delete($id);
		redirect('backend/pegawai');
	}

	public function laporan_pegawai(){
		$data['title'] = 'Laporan Pegawai';
		$data['page'] = 'backend/pegawai/laporan/index';
		$data['data'] = $this->Mpegawai->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function cetak_pegawai()
	{
		$data['title'] = 'Laporan Pegawai';
		$data['data'] = $this->Mpegawai->view()->result();
		$this->load->view('backend/pegawai/laporan/print', $data);
	}

	//periode
	public function periode()
	{
		$data['title'] = 'Periode';
		$data['page'] = 'backend/periode/index';
		$data['data'] = $this->Mperiode->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function tambah_periode()
	{
		$data['title'] = 'Periode';
		$data['page'] = 'backend/periode/add';
		$this->load->view('backend/index', $data);
	}

	function insert_periode()
	{
		if (isset($_POST['submit'])) {
			$object = array(
				'jangka_waktu_penilaian' 			=> $this->input->post('jangka_waktu_penilaian'),
				'tgl_formulir' 						=> $this->input->post('tgl_formulir'),
				'tgl_form_penilaian_penilai' 		=> $this->input->post('tgl_form_penilaian_penilai'),
				'tgl_form_penilaian_dinilai' 		=> $this->input->post('tgl_form_penilaian_dinilai'),
				'tgl_form_penilaian_atasan' 		=> $this->input->post('tgl_form_penilaian_atasan'),

			);
			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mperiode->save($object);
			redirect('backend/periode');
		} else {
			redirect('backend/periode');
		}

	}

	function delete_periode($id) {
		$this->Mperiode->delete($id);
		redirect('backend/periode');
	}


	public function tampil_ubah_periode($id)
	{
		$data['title'] = 'Periode';
		$data['page'] = 'backend/periode/edit';
		$data['data'] = $this->Mperiode->tampil_ubah($id)->result();
		$this->load->view('backend/index', $data);
	}

	function edit_periode()
	{
		if (isset($_POST['submit'])) {
			$id_periode = $this->input->post('id_periode');
			$object = array(
				'jangka_waktu_penilaian' 			=> $this->input->post('jangka_waktu_penilaian'),
				'tgl_formulir' 						=> $this->input->post('tgl_formulir'),
				'tgl_form_penilaian_penilai' 		=> $this->input->post('tgl_form_penilaian_penilai'),
				'tgl_form_penilaian_dinilai' 		=> $this->input->post('tgl_form_penilaian_dinilai'),
				'tgl_form_penilaian_atasan' 		=> $this->input->post('tgl_form_penilaian_atasan'),
			);

			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mperiode->update($id_periode, $object);
			redirect('backend/periode');
		} else {
			redirect('backend/periode');
		}

	}

	public function palru()
	{
		$data['title'] = 'Palru';
		$data['page'] = 'backend/palru/index';
		$data['data'] = $this->Mpalru->view()->result();
		$this->load->view('backend/index', $data);
	}


	public function tambah_palru()
	{
		$data['title'] = 'Palru';
		$data['page'] = 'backend/palru/add';
		$this->load->view('backend/index', $data);
	}

	function insert_palru()
	{
		if (isset($_POST['submit'])) {
			$object = array(
				'nama_palru' => $this->input->post('nama_palru'),
			);
			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mpalru->save($object);
			redirect('backend/palru');
		} else {
			redirect('backend/palru');
		}

	}

	public function tampil_ubah_palru($id)
	{
		$data['title'] = 'Palru';
		$data['page'] = 'backend/palru/edit';
		$data['data'] = $this->Mpalru->tampil_ubah($id)->result();
		$this->load->view('backend/index', $data);
	}

	function edit_palru()
	{
		if (isset($_POST['submit'])) {
			$id_palru = $this->input->post('id_palru');
			$object = array(
				'nama_palru' => $this->input->post('nama_palru'),
			);

			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mpalru->update($id_palru, $object);
			redirect('backend/palru');
		} else {
			redirect('backend/palru');
		}

	}

	function delete_palru($id) {
		$this->Mpalru->delete($id);
		redirect('backend/palru');
	}


	// Laporan
	public function laporan_palru()
	{
		$data['title'] = 'Laporan Palru';
		$data['page'] = 'backend/palru/laporan/index';
		$data['data'] = $this->Mpalru->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function cetak_palru()
	{
		$data['title'] = 'Laporan Palru';
		$data['data'] = $this->Mpalru->view()->result();
		$this->load->view('backend/palru/laporan/print', $data);
	}



	// PERILAKU

	public function perilaku()
	{
		$data['title'] = 'Perilaku';
		$data['page'] = 'backend/perilaku/index';
		$data['data'] = $this->Mperilaku->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function tambah_perilaku()
	{
		$data['title'] = 'Perilaku';
		$data['page'] = 'backend/perilaku/add';
		$this->load->view('backend/index', $data);
	}

	function insert_perilaku()
	{
		if (isset($_POST['submit'])) {
			$object = array(
				'id_pegawai' 					=> $this->input->post('id_pegawai'),
				'orientasi_pelayanan' 			=> $this->input->post('orientasi_pelayanan'),
				'integritas' 					=> $this->input->post('integritas'),
				'komitmen' 						=> $this->input->post('komitmen'),
				'disiplin' 						=> $this->input->post('disiplin'),
				'kerjasama' 					=> $this->input->post('kerjasama'),
				'kepemimpinan'					=> $this->input->post('kepemimpinan'),
				'jumlah' 						=> $this->input->post('jumlah'),
				'rata_rata' 					=> $this->input->post('rata_rata'),
			);
			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mperilaku->save($object);
			redirect('backend/perilaku');
		} else {
			redirect('backend/perilaku');
		}

	}

	public function tampil_ubah_perilaku($id)
	{
		$data['title'] 	= 'Perilaku';
		$data['page'] 	= 'backend/perilaku/edit';
		$data['data'] 	= $this->Mperilaku->tampil_ubah($id)->result();
		$this->load->view('backend/index', $data);
	}

	function edit_perilaku()
	{
		if (isset($_POST['submit'])) {
			$id_pegawai = $this->input->post('id_pegawai');
			$object = array(
				'orientasi_pelayanan' 			=> $this->input->post('orientasi_pelayanan'),
				'integritas' 					=> $this->input->post('integritas'),
				'komitmen' 						=> $this->input->post('komitmen'),
				'disiplin' 						=> $this->input->post('disiplin'),
				'kerjasama' 					=> $this->input->post('kerjasama'),
				'kepemimpinan' 					=> $this->input->post('kepemimpinan'),
				'jumlah' 						=> $this->input->post('jumlah'),
				'rata_rata'	 					=> $this->input->post('rata_rata'),
			);

			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mperilaku->update($id_pegawai, $object);
			redirect('backend/perilaku');
		} else {
			redirect('backend/perilaku');
		}

	}

	function delete_perilaku($id) {
		$this->Mperilaku->delete($id);
		redirect('backend/perilaku');
	}


	// Laporan
	public function laporan_perilaku()
	{
		$data['title'] = 'Laporan Perilaku';
		$data['page'] = 'backend/perilaku/laporan/index';
		$data['data'] = $this->Mperilaku->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function cetak_perilaku()
	{
		$data['title'] = 'Laporan perilaku';
		$data['data'] = $this->Mperilaku->view()->result();
		$this->load->view('backend/perilaku/laporan/print', $data);
	}

	// lembaga
	public function lembaga()
	{
		$data['title'] = 'Lembaga';
		$data['page'] = 'backend/lembaga/index';
		$data['data'] = $this->Mlembaga->view()->result();
		$this->load->view('backend/index', $data);
	}

	public function tambah_lembaga()
	{
		$data['title'] = 'Lembaga';
		$data['page'] = 'backend/lembaga/add';
		$this->load->view('backend/index', $data);
	}

	function insert_lembaga()
	{
		if (isset($_POST['submit'])) {
			$object = array(
				'id_lembaga' 			=> $this->input->post('id_lembaga'),
				'nama_lembaga' 		=> $this->input->post('nama_lembaga'),
				'alamat_lembaga' 	=> $this->input->post('alamat_lembaga'),
				'email_lembaga' 	=> $this->input->post('email_lembaga'),
				'no_telp' 				=> $this->input->post('no_telp'),
			);
			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mlembaga->save($object);
			redirect('backend/lembaga');
		} else {
			redirect('backend/lembaga');
		}

	}

	public function tampil_ubah_lembaga($id)
	{
		$data['title'] = 'Lembaga';
		$data['page'] = 'backend/lembaga/edit';
		$data['data'] = $this->Mlembaga->tampil_ubah($id)->result();
		$this->load->view('backend/index', $data);
	}

	function edit_lembaga()
	{
		if (isset($_POST['submit'])) {
			$id_lembaga = $this->input->post('id_lembaga');
			$object = array(
				'id_lembaga' 			=> $this->input->post('id_lembaga'),
				'nama_lembaga' 			=> $this->input->post('nama_lembaga'),
				'alamat_lembaga' 		=> $this->input->post('alamat_lembaga'),
				'email_lembaga' 		=> $this->input->post('email_lembaga'),
				'no_telp' 				=> $this->input->post('no_telp'),


			);

			// Untuk menangani serangan XSS
			$object = $this->security->xss_clean($object);
			$this->Mlembaga->update($id_lembaga, $object);
			redirect('backend/lembaga');
		} else {
			redirect('backend/lembaga');
		}

	}

	function delete_lembaga($id) {
		$this->Mlembaga->delete($id);
		redirect('backend/lembaga');
	}

}
