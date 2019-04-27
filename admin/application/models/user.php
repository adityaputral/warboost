<?php
defined('BASEPATH') or exit('No direct script access allowed');
class user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function funcGetTotalUserRegistered(){
        $this->db->get('user');
        return $this->db->count_all_results('user');
    }
}
