<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		if(($this->session->userdata('status')) == "Login"){
			redirect(base_url("backend"));
		}		
		$this->load->model('Mlogin');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Mlogin->cek_login("tbl_login",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "Login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("backend/index"));

		}else{
			echo "<script type='text/javascript'>
					alert ('Maaf Username dan Password Anda Salah !');
					document.location='../login';
					</script>";
					
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url("login"));
	}
}