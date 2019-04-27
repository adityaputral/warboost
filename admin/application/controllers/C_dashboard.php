<?php

class C_dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if($this->session->userdata('logged_in')){
            // $this->session->set_userdata('referred_from', current_url());
            $this->load->model('transaksi');
            $this->load->model('user');
            $this->load->model('booster');
            $this->load->model('admin');

            $aData['totalTransaksi'] = $this->transaksi->funcGetTotalTransaction();
            $aData['totalPrice'] = $this->transaksi->funcGetTotalPriceTransaction();
            $aData['totalUser'] = $this->user->funcGetTotalUserRegistered();
            $aData['totalBooster'] = $this->booster->funcGetTotalBoosterRegistered();
            $aData['listAdmin'] = $this->admin->funcGetListAdmin();

            $this->load->view('templates_user/V_header');
            $this->load->view('templates_user/V_sidebar');
            $this->load->view('templates_user/V_topbar');
            $this->load->view('pages_user/V_dashboard',$aData);
            $this->load->view('templates_user/V_footer');
        } else{
            redirect('/');
        }
        
    }

    public function func404()
    {
        $this->load->view('404');
    }
}
