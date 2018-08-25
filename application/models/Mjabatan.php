<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mjabatan extends CI_Model {

	var $table = 'tbl_jabatan';
	var $primary = 'id_jabatan';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function view()
	{
		$query = $this->db->query("SELECT * FROM tbl_jabatan");
		return $query;
	}

	public function save($object)
	{
		$query = $this->db->insert($this->table, $object);
		return $query;
	}

	public function tampil_ubah($id)
	{
		$query = $this->db->query("SELECT * FROM tbl_jabatan WHERE id_jabatan='". $id ."'");
		return $query;
	}

	public function update($id, $object)
	{
		$this->db->where($this->primary, $id);
		$query = $this->db->update($this->table, $object);
		return $query;
	}

	public function delete($id)
	{
		$query = $this->db->query("DELETE FROM tbl_jabatan WHERE id_jabatan='" . $id ."'");
		return $query;
	}

	public function filter($id) {
		$query = $this->db->query("SELECT * FROM tbl_jabatan WHERE id_jabatan='". $id ."'")->row(0);
		return $query;
	}
}
