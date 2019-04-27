<?php

class C_users extends CI_Controller
{

 public function __construct()
 {
  // session_start();
  parent::__construct();
 }

 public function pageSelect($sPage){

  $this->load->model('user');

  $aEmailBooster['email'] = $this->user->getEmail($this->session->userdata('username'));
  $aEmailBooster['listCart'] = $this->cart->funcGetUsersCart($this->session->userdata('id'));
  $aEmailBooster['games'] = $this->game->funcGetListGame();
  $aEmailBooster['booster'] = $this->user->countBooster($this->session->userdata('id'));
  $aEmailBooster['gamesBoosted'] = $this->user->countBoostedGames($this->session->userdata('id'));

  if($sPage === 'activity'){
    $this->load->view('templates_user/V_header', $aEmailBooster);
    $this->load->view('pages_user/users/V_users_activity', $aEmailBooster);
    $this->load->view('templates_user/V_footer');
  }
  else if($sPage === 'profile'){
    $this->load->view('templates_user/V_header', $aEmailBooster);
    $this->load->view('pages_user/users/V_users_profile', $aEmailBooster);
    $this->load->view('templates_user/V_footer');
  }
  else if($sPage === 'settings'){
    $this->load->view('templates_user/V_header', $aEmailBooster);
    $this->load->view('pages_user/users/V_users_settings', $aEmailBooster);
    $this->load->view('templates_user/V_footer');
  }
 }

//  public function funcDetailUsers($username)
//  {
//   $this->load->model('booster');

//   $aData['dataBooster'] = $this->booster->funcGetDataUser($username);

//   $this->load->view('templates_user/V_header');
//   $this->load->view('pages_user/V_user', $aData);
//   $this->load->view('templates_user/V_footer');
//  }
}
?>