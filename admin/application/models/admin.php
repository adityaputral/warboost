<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	function loginverify($username, $password)
	{
		$this->db->select('id, username, nama');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('admin');
		if ($result->num_rows() == 1) {
			return $result->result();
		} else {
			return false;
		}
	}

	function checkUsername($username)
	{
		$this->db->where('username', $username);
		$result = $this->db->get('admin');
		if ($result->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	function getPassword($username)
	{
		$item = "password";
		$this->db->select('password');
		$this->db->where('username', $username);
		$result = $this->db->get('admin');
		if ($result->num_rows() == 1) {
			return $result->row(0)->$item;
		} else {
			return false;
		}
	}

	function addUser($username, $password, $nama, $email)
	{
		$data = array(
			'username' => $username,
			'password' => $password,
			'nama' => $nama,
			'email' => $email
		);
		$result = $this->db->insert('admin', $data);
		if ($result) {
			return true;
		} else {
			return false;
		}
	}

	function getEmail($username)
	{
		$item = "email";
		$this->db->select('email');
		$this->db->where('username', $username);
		$result = $this->db->get('admin');
		if ($result->num_rows() == 1) {
			return $result->row(0)->$item;
		} else {
			return false;
		}
	}

	public function funcGetListAdmin(){
		$result = $this->db->get('admin');

		return $result->result_array();
	}

	public function funcRemoveAdmin($id){
		$this->db->where('id', $id);

		$result = $this->db->delete('admin');
		if($result){
			return true;
		} else{
			return false;
		}
	}
}
