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
}
?>