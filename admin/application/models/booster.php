<?php
defined('BASEPATH') or exit('No direct script access allowed');
class booster extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function funcGetTotalBoosterRegistered(){
        $this->db->get('booster');
        return $this->db->count_all_results('booster');
    }
}
