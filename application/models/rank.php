<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class rank extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcGetListRank($game){
        $this->db->join('game', 'game.id = rank.id_game');
        $this->db->where('id_game', $game);
        $aListBooster = $this->db->get('rank');
        return $aListBooster->result_array();
    }

    function funcCalculatePrice($currRank, $desiredRank){
        $this->db->select_sum('base_price');
        $this->db->where('id_rank >', $currRank);
        $this->db->where('id_rank <=', $desiredRank);

        $price = $this->db->get('rank');
        return $price->result_array();
    }
}
?>