<?php
defined('BASEPATH') or exit('No direct script access allowed');
class booster extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function addBooster($username,$password,$nama,$nickName,$tanggalLahir,$nomorHp, $email,$rating,$idStatus,$pathProfilPic,$aboutMe){
        $data = array(
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'ingame_nickname' => $nickName,
            'tanggal_lahir' => $tanggalLahir,
            'nomor_hp' => $nomorHp,
            'email' => $email,
            'rating' => $rating,
            'id_status' => $idStatus,
            'path_profilpic' => $pathProfilPic,
            'about_me' => $aboutMe,
        );
        $result = $this->db->insert('booster',$data);
        if($result){
           return true;
       }
       else{
           return false;
       }
    }

    function checkUsername($username)
	{
		$this->db->where('username', $username);
		$result = $this->db->get('booster');
		if ($result->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
    }
    
    function checkNickName($nickname){
        $this->db->where('ingame_nickname',$nickname);
        $result = $this->db->get('booster');
        if($result->num_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }


    public function funcGetTotalBoosterRegistered(){
        $this->db->get('booster');
        return $this->db->count_all_results('booster');
    }
}
