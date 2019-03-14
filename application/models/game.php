<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class game extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcGetListGame(){
        $aListGame = $this->db->get('game');
        return $aListGame->result_array();
    }
}
?>