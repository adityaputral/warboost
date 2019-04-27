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
}
