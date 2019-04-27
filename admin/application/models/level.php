<?php
defined('BASEPATH') or exit('No direct script access allowed');
class level extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function funcInsertLevel($jumlahLevel, $idGame, $basePrice){
        $data = array(
			'jumlah_level' => $jumlahLevel,
			'id_game' => $idGame,
			'base_price' => $basePrice,
		);
		$result = $this->db->insert('level', $data);
		if ($result) {
			return true;
		} else {
			return false;
		}
    }
}
