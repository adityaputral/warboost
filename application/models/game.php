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

    function funcGetIdGame($abr){
        $this->db->where('abreviasi', $abr);

        $game = $this->db->get('game');
        return $game->result_array()[0];
    }
}
?>