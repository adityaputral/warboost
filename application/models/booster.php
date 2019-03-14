<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class booster extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcGetListBooster(){
        $aListBooster = $this->db->get('booster');
        return $aListBooster->result_array();
    }
}
?>