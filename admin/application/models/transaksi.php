<?php
defined('BASEPATH') or exit('No direct script access allowed');
class transaksi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function funcGetTotalTransaction(){
        $this->db->get('transaksi');
        return $this->db->count_all_results('transaksi');
    }

    public function funcGetTotalPriceTransaction(){
        $this->db->select_sum('price');

        $totalPrice = $this->db->get('transaksi');

        return $totalPrice->result_array()[0];
    }

    function funcGetListTransaksi(){
        $this->db->join('booster', 'booster.id = transaksi.id_booster');
        $this->db->join('user', 'user.id = transaksi.id_user');
        $this->db->join('game', 'game.id = transaksi.id_game');
        $this->db->join('tipe_boosting', 'tipe_boosting.id_tipeboosting = transaksi.id_tipe_boosting');
        $this->db->order_by('transaksi.tanggal','asc');
        $aListTransaksi = $this->db->get('transaksi');
        return $aListTransaksi->result_array();
    }
}
