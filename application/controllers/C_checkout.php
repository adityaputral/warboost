<?php

class C_checkout extends CI_Controller
{

    public function __construct()
    {
        // $this->load->library('paypal_lib');
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('transaksi');
        $this->load->model('cart');
        $this->load->model('payment');

        $aCart['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));

        $aPayment['listPayment'] = $this->payment->funcGetListPayment();

        // var_dump($aCart);

        $this->session->set_userdata('referred_from', current_url());

        $this->load->view('templates_user/V_header', $aCart);
        $this->load->view('pages_user/V_checkout', $aPayment);
        $this->load->view('templates_user/V_footer');
    }

    public function func404()
    {
        $this->load->view('404');
    }

    public function funcCheckout(){
        $this->load->model('transaksi');
        $this->load->model('cart');
        

        $dataCart = $this->cart->funcGetUsersCart($this->session->userdata('id'))[0];

        

        var_dump($dataCart);

        if($this->session->userdata('logged_in')){
            $tanggal = date_create()->format('Y-m-d H:i:s');;
            $id_user = $this->session->userdata('id'); 
            $id_booster = $dataCart['id_booster']; 
            $id_game=$dataCart['id_game'];
            $price = $this->input->post('total_price');
            $id_tipe_boosting = $dataCart['id_tipe_boosting']; 
            $current_rank = $dataCart['current_rank'];
            $desired_rank = $dataCart['desired_rank'];
            $id_payment = $this->input->post('payment_type');
            $username_account = $this->input->post('username_akun');
            $password_account = $this->input->post('password_akun');
            $notes = $this->input->post('notes');

            var_dump($price);
    
            $res = $this->transaksi->funcOrder($tanggal, $id_user, $id_booster, $id_game, $price, $id_tipe_boosting, $current_rank, $desired_rank, $id_payment, $username_account, $password_account, $notes);
    
            if($res){
                $this->cart->funcRemoveCart($dataCart['id_cart']);

                $this->session->set_flashdata('status', 'success');
                $this->session->set_flashdata('notification', 'Success');
                $referred_from = $this->session->userdata('referred_from');
                redirect($referred_from, 'refresh');
                // echo $this->show_cart($id_user);
            }
            else{
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Failed');
                $referred_from = $this->session->userdata('referred_from');
                redirect($referred_from, 'refresh');
            }
        } else{
            $this->session->set_flashdata('status', 'error');
            $this->session->set_flashdata('notification', 'You need to login first');
            $referred_from = $this->session->userdata('referred_from');
            redirect($referred_from, 'refresh');
        }
    }
}
