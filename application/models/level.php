<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class level extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcGetListLevel($game){
        $this->db->join('game', 'game.id = level.id_game');
        $this->db->where('id_game', $game);
        $aListBooster = $this->db->get('level');
        return $aListBooster->result_array();
    }

    function funcCalculatePrice($lvl, $game){
        $this->db->where('id_game', $game);

        $price = $this->db->get('level');
        return $price->result_array()[0];
    }
}
?>