<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class win extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcGetListWin($game){
        $this->db->join('game', 'game.id = win.id_game');
        $this->db->where('id_game', $game);
        $aListBooster = $this->db->get('win');
        return $aListBooster->result_array();
    }

    function funcCalculatePrice($win){

        $this->db->where('id_win', $win);

        $price = $this->db->get('win');
        return $price->result_array();
    }
}
?>