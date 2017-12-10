<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');

    // if (!$this->session->userdata('username')) {
    //   redirect('admin');
    // }
  }

	public function index()
	{
    $username = 'Gilang';//$this->session->userdata('username');
    $data = $this->user_model->GetPesanan($username);
		$this ->load->view('user_pesanan', array('data' => $data));
	}

  public function cancel_order($id){
    $this->user_model->delete_order($id);
    redirect('user');
  }

  public function menu()
  {
    $data = $this-> user_model -> GetMenu();
		$this ->load->view('admin_menu', array('data' => $data));
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->sess_destroy();
    redirect('admin');
  }
}
