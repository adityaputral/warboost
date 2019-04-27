<?php

class C_transaksi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        if($this->session->userdata('logged_in')){
            // $this->session->set_userdata('referred_from', current_url());
            $this->load->model('admin');
            $this->load->model('transaksi');

            $aData['listTransaksi'] = $this->transaksi->funcGetListTransaksi();

            $this->load->view('templates_user/V_header');
            $this->load->view('templates_user/V_sidebar');
            $this->load->view('templates_user/V_topbar');
            $this->load->view('pages_user/V_listTransaksi',$aData);
            $this->load->view('templates_user/V_footer');
        } else{
            redirect('/');
        }
    }
}
