<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_cart extends CI_Controller{
	public function __construct(){
    	parent::__construct();
    }

    public function index(){
        $this->load->model('cart');

        $aCart['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));

        // var_dump($aCart);
        
        $this->session->set_userdata('referred_from', current_url());

		$this->load->view('templates_user/V_header', $aCart);
		$this->load->view('pages_user/V_cart', $aCart);
		$this->load->view('templates_user/V_footer');

    }
    
    function funcAddToCart(){
        $this->load->model('cart');
        if($this->session->userdata('logged_in')){
            $id_user = $this->session->userdata('id'); 
            $id_booster = $this->input->post('booster'); 
            $id_game=$this->input->post('game');
            $price = $this->input->post('price');
            $id_tipe_boosting = $this->input->post('tipe_boosting'); 
            $current_rank = $this->input->post('current_rank');
            $desired_rank = $this->input->post('desired_rank');
    
            $res = $this->cart->funcAddToCart($id_user, $id_booster, $id_game, $price, $id_tipe_boosting, $current_rank, $desired_rank);
    
            if($res){
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

    public function funcRemoveSelectedItem($id_cart){
        $this->load->model('cart');
        if($this->session->userdata('logged_in')){
            $res = $this->cart->funcRemoveCart($id_cart);
            if($res){
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

    function show_cart($user){
        $output = '';
        foreach ($this->cart->funcGetUsersCart($user) as $cart) {
            $output .='
                <div class="row youplay-side-news">
                    <div class="col-xs-3 col-md-4">
                        <a href="#" class="angled-img">
                            <div class="img">
                                
                                    <img src="<?php echo base_url();?>assets/images/dark/game-bloodborne-500x375.jpg" alt="">
                                    
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-9 col-md-8">
                        <a href="#" class="pull-right mr-10"><i class="fa fa-times"></i></a>
                        
                            <h4 class="ellipsis"><a href="#">'.$cart['nama_boosting'].'</a></h4>
                            
                        <span class="quantity"><span class="amount">'.$cart['price'].'</span></span>
                    </div>
                </div>
            ';
        }
        // $output .= '
        //     <tr>
        //         <th colspan="3">Total</th>
        //         <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
        //     </tr>
        // ';
        return $output;
    }
}
