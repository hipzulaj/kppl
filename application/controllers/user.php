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
    $namapemesan = $this->session->userdata('username');
    $data = $this->user_model->GetPesanan($namapemesan);
		$this ->load->view('user_pesanan', array('data' => $data));
	}

  public function order(){
    
  }

  public function cancel_order($id){
    $this->user_model->delete_order($id);
    redirect('user');
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->sess_destroy();
    redirect('admin');
  }
}
