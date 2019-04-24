<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class payment extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcGetListPayment(){
        $aListGame = $this->db->get('payment');
        return $aListGame->result_array();
    }
}
?>