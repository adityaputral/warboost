<?php

class C_users extends CI_Controller
{

 public function __construct()
 {
  // session_start();
  parent::__construct();
 }

 public function index($username){

  $this->load->model('user');

  $aData['username'] = $this->user->getUsername($username);

  $this->load->view('templates_user/V_header');
 $this->load->view('pages_user/V_users', $aData);
  $this->load->view('templates_user/V_footer');
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