<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class cart extends CI_Model{
	public function __construct(){
    	parent::__construct();
    }
    
    function funcAddToCart($id_user, $id_booster, $id_game, $price, $id_tipe_boosting, $current_rank, $desired_rank){
        $data = array(
            'id_user' => $id_user, 
            'id_booster' => $id_booster, 
            'id_game' => $id_game,
            'price' => $price, 
            'id_tipe_boosting' => $id_tipe_boosting, 
            'current_rank' => $current_rank, 
            'desired_rank' => $desired_rank
        );
        $result = $this->db->insert('cart', $data);

        if($result){
			return true;
		}
		else{
			return false;
		}
    }

    function funcRemoveCart($id_cart){
        $this->db->where('id_cart', $id_cart);
        $result = $this->db->delete('cart');

        if($result){
			return true;
		}
		else{
			return false;
		}
    }

    function funcGetUsersCart($idUser){
        $this->db->join('tipe_boosting', 'tipe_boosting.id = cart.id_tipe_boosting');
        $this->db->where('id_user', $idUser);

        $cart = $this->db->get('cart');
        return $cart->result_array();
    }
}
?>