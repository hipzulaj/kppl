<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_user extends CI_Controller {

	function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

	public function index()
	{
		$this->load->view('akun');
	}

	public function validasi(){
		$this->form_validation->set_rules('username','Username','required|max_length[20]|is_unique[customer.username]',
                                                array('is_unique'=>'Try another username!'));
		$this->form_validation->set_rules('password','Password','required|max_length[20]|min_length[8]');
		$this->form_validation->set_rules('retype','Retype Password','matches[password]',
												array('matches'=>'Password does not match!'));
        $this->form_validation->set_rules('no_hp','Nomer Hp','required|numeric|max_length[13]|min_length[8]');
        $this->form_validation->set_rules('email','Email','required|valid_email');
               
                  
 
		if($this->form_validation->run() != false){
			$this->register();
		}else{
            $this->load->view('error_register', array('errornya'=>validation_errors()));
		}
	}

	function register(){
               
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'fullname' => $this->input->post('fullname'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
		);
		$this->user_model->addAcc($data);
		$data_session = array(
						'username' => $data['username'],
						'role' => "customer");
		$this->session->set_userdata($data_session);
            redirect('home');
    }

    function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$isLogin = $this->user_model->login_authen($username, $password);
		$iyalogin = $isLogin->result_array();

		if ($isLogin->num_rows()>0) {
			$data_session = array(
							'username' => $username,
							'role' => "customer");
			$this->session->set_userdata($data_session);
			redirect('home'); 
		}
		else{
			echo "username dan password salah";
		}
	}

	function logout(){
                $this->session->unset_userdata('username');
                $this->session->unset_userdata('role');
                 $this->session->unset_userdata('password');
		$this->session->sess_destroy();
		redirect('home');
	}
}   
