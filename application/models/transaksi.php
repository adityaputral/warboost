<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class transaksi extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcGet5LatestTransaksi(){
        $this->db->join('booster', 'booster.id = transaksi.id_booster');
        $this->db->join('user', 'user.id = transaksi.id_user');
        $this->db->join('game', 'game.id = transaksi.id_game');
        $this->db->join('tipe_boosting', 'tipe_boosting.id = transaksi.id_tipe_boosting');
        $this->db->order_by('transaksi.tanggal','asc');
        $aList5LatestTransaksi = $this->db->get('transaksi',5);
        return $aList5LatestTransaksi->result_array();
    }
}
?>