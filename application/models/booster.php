<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class booster extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcGetListBooster(){
        $this->db->join('status_booster', 'status_booster.id = booster.id_status');
        $aListBooster = $this->db->get('booster');
        return $aListBooster->result_array();
    }
}
?>