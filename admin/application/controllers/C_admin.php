<?php

class C_admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function funcRemoveAdmin($idBooster)
    {
        if ($this->session->userdata('logged_in')) {
            $this->load->model('admin');

            $res = $this->admin->funcRemoveAdmin($idBooster);

            if ($res) {
                $this->session->set_flashdata('status', 'success');
                $this->session->set_flashdata('notification', 'Success');
                redirect('/dashboard');
                // echo $this->show_cart($id_user);
            } else {
                $this->session->set_flashdata('status', 'error');
                $this->session->set_flashdata('notification', 'Failed');
                redirect('/dashboard');
            }
        }
    }
}
