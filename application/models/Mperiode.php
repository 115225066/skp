<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mperiode extends CI_Model {

	var $table = 'tbl_periode';
	var $primary = 'id_periode';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function view()
	{
		$query = $this->db->query("SELECT * FROM tbl_periode");
		return $query;
	}

	public function save($object)
	{
		$query = $this->db->insert($this->table, $object);
		return $query;
	}

	public function tampil_ubah($id)
	{
		$query = $this->db->query("SELECT * FROM tbl_periode WHERE id_periode='". $id ."'");
		//$query = $this->db->delete($this->table, array($this->primary=>$id));
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
		$query = $this->db->query("DELETE FROM tbl_periode WHERE id_periode='" . $id ."'");
		//$query = $this->db->delete($this->table, array($this->primary=>$id));
		return $query;
	}
}
