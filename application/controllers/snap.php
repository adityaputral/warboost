<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Snap extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
    {
        parent::__construct();
        $params = array('server_key' => 'SB-Mid-server-spRRyo40-FMhyRDjQ7EMlXhn', 'production' => false);
		$this->load->library('midtrans');
		$this->midtrans->config($params);
		$this->load->helper('url');	
    }
    public function index()
    {
			$this->load->view('checkout_snap');
		 
		}
		

	
		 
	
	
    public function token()
    {
			
			
			
		// Required
		$transaction_details = array(
		  'order_id' => rand(),
		  'gross_amount' => $_POST['price'], // no decimal allowed for creditcard
		);
		// Optional
		//$item1_details = $this->getItemCart();
		// Optional
		$item1_details = array(
		  'id' =>  $_POST['id'],
		  'price' => $_POST['price'],
		  'quantity' => 1,
		  'name' => $_POST['name']
		);
		// Optional
		$item_details = array ( $item1_details);
		// Optional
		
		// Optional
		$customer_details = array(
		  'first_name'    => $_POST['cust_name']
		  
		);
		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;
        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );
		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }
    public function finish()
    {
			
			$this->session->set_flashdata('status', 'success');
			$this->session->set_flashdata('notification', 'Success');
			$referred_from = $this->session->userdata('referred_from');
			redirect('/');
    }
}