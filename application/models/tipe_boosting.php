<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class tipe_boosting extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcJenisBoosting($game){
        $this->db->join('game', 'game.id = tipe_boosting.id_game');
        $this->db->where('id_game', $game);
        $aListTipeBoosting = $this->db->get('tipe_boosting');
        return $aListTipeBoosting->result_array();
    }
}
?>