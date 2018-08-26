<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends CI_Model {

	var $table = 'tbl_pegawai';
	var $primary = 'id_pegawai';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function view()
	{
		$query = $this->db->query("SELECT * FROM tbl_pegawai");
		return $query;
    }
    
    public function get_data($table)
	{
			$this->db->from($table);
			$query = $this->db->get();

			return $query;
	}

}
