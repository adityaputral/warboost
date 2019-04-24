<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class booster extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	function loginverify($username, $password){
		$this->db->select('id, username, nama,ingame_nickname,email,rating,id_status,about_me');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$result = $this->db->get('booster');
		if($result->num_rows() == 1){
			return $result->result();
		}
		else {
			return false;
		}
	}

	function checkUsername($username){
		$this->db->where('username', $username);
		$result = $this->db->get('booster');
		if($result->num_rows() == 1){
			return true;
		}
		else {
			return false;
		}
	}

	function getPassword($username){
		$item = "password";
		$this->db->select('password');
		$this->db->where('username', $username);
		$result = $this->db->get('booster');
		if($result->num_rows() == 1){
			return $result->row(0)->$item;
		}
		else {
			return false;
		}
	}

	function changeStatus($id,$status){
		$data=[
			'id_status' => $status
		];
		$this->db->where('id',$id);
		$this->db->update('booster',$data);
		echo 'status updated succesfully';
	}

	function getOrder(){
		$id = $this->session->userdata('id');

		$this->db->select('*');
		$this->db->where('id_booster', $id);
		$this->db->from('transaksi');
		$this->db->join('user', 'user.id = transaksi.id_user', 'left');
		$this->db->join('game', 'game.id = transaksi.id_game', 'left');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getOrderDetails($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->from('transaksi');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>
