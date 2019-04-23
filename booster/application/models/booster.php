<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class booster extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }

    function loginverify($username, $password){
		$this->db->select('id, username, nama');
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
		$result = $this->db->get('user');
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
		$result = $this->db->get('user');
		if($result->num_rows() == 1){
			return $result->row(0)->$item;
		} 
		else {
			return false;
		}
    }
    
}
?>