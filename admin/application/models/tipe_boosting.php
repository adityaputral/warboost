<?php
defined('BASEPATH') or exit('No direct script access allowed');
class tipe_boosting extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function funcInsertTipeBoosting($namaBoosting, $idGame, $jenisBoost){
        $data = array(
			'nama_boosting' => $namaBoosting,
			'id_game' => $idGame,
			'jenis_boost' => $jenisBoost,
		);
		$result = $this->db->insert('tipe_boosting', $data);
		if ($result) {
			return true;
		} else {
			return false;
		}
    }
}
