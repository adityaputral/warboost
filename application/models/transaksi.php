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
        $this->db->join('tipe_boosting', 'tipe_boosting.id_tipeboosting = transaksi.id_tipe_boosting');
        $this->db->order_by('transaksi.tanggal','asc');
        $aList5LatestTransaksi = $this->db->get('transaksi',5);
        return $aList5LatestTransaksi->result_array();
    }

    function funcOrder($tanggal, $id_user, $id_booster, $id_game, $price, $id_tipe_boosting, $current_rank, $desired_rank, $total_win, $current_level,$desired_level, $id_payment, $username_akun,$password_akun, $notes){
        $data = array(
            'tanggal' => $tanggal,
            'id_user' => $id_user, 
            'id_booster' => $id_booster, 
            'id_game' => $id_game,
            'price' => $price, 
            'id_tipe_boosting' => $id_tipe_boosting, 
            'current_rank' => $current_rank, 
            'desired_rank' => $desired_rank,
            'total_win' => $total_win, 
            'current_level'=>$current_level,
            'desired_level'=>$desired_level,
            'id_payment' => $id_payment,
            'username_akun' => $username_akun,
            'password_akun' => $password_akun,
            'notes' => $notes
        );
        $result = $this->db->insert('transaksi', $data);

        if($result){
			return true;
		}
		else{
			return false;
		}
    }
}
?>