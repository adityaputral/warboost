<?php
defined('BASEPATH') or exit('No direct script access allowed');
class win extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function funcInsertWin($data){
		$result = $this->db->insert_batch('win', $data);
		if ($result) {
			return true;
		} else {
			return false;
		}
    }
}
