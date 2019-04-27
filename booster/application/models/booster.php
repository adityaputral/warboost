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

	function getProfile(){
		$id = $this->session->userdata('id');

		$this->db->select('*');
		$this->db->where('id',$id);
		$this->db->from('booster');
		$query = $this->db->get();
		return $query->result_array();
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

	function getListStatus(){
		$this->db->select('*');
		$this->db->from('status_booster');
		$query = $this->db->get();
		return $query->result_array();
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
		$this->db->join('progress', 'progress.id_transaksi = transaksi.id_transaction', 'left');
		$this->db->join('status_progress_boosting', 'progress.id_status = status_progress_boosting.id', 'left');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getOrderDetails($id){
		$this->db->select('*');
		$this->db->where('id_transaction', $id);
		$this->db->from('transaksi');
		$this->db->join('user', 'user.id = transaksi.id_user', 'left');
		$this->db->join('game', 'game.id = transaksi.id_game', 'left');
		$this->db->join('progress', 'progress.id_transaksi = transaksi.id_transaction', 'left');
		$this->db->join('status_progress_boosting', 'progress.id_status = status_progress_boosting.id', 'left');
		$query = $this->db->get();
		return $query->result_array();
	}

	function changePassword($username, $pass){
		$data=[
			'password' => $pass
		];
		$this->db->where('username',$username);
		$this->db->update('booster',$data);
		echo 'status updated succesfully';
	}

	function list_status_progress(){
		$this->db->select('*');
		$this->db->from('status_progress_boosting');
		$query = $this->db->get();
		return $query->result_array();
	}

	function update_order($id,$mode,$status){
		if ($mode == 0) {
			$this->db->where('id_transaksi',$id);
			$q = $this->db->get('progress');

			$notes="";

			if ( $q->num_rows() > 0 )
			{
				$data=[
					'id_status' => $status
				];
				$this->db->where('id_transaksi',$id);
				$this->db->update('progress',$data);
			} else {
				$data = array(
					'id_transaksi' => $id,
					'id_status' => $status,
					'notes' => $notes
				);

				$this->db->insert('progress', $data);
			}
		} elseif ($mode == 1) {
			$this->db->where('id_transaksi', $id);
			$this->db->delete('progress');

			$this->db->where('id_transaction', $id);
			$this->db->delete('transaksi');
		}
		return true;
	}
}
?>
