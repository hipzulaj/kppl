<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->model('user_model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('email');
	}

	function index() {
		$data = $this->My_Model->GetYummyEatery();
		$this ->load->view('yummy', array('data' => $data));
	}

    function yummyabout(){
        $this->load->view('yummyabout');
    }

    function yummytim() {
        $this->load->view('yummyteam');
    }

    function yummytestim() {
        $this->load->view('yummytestim');
    }

    public function insert_feedback(){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];

    	//Config emaill
    	$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = "465";
		//$config['smtp_timeout'] = ‘7’;
		$config['smtp_user'] = "mfauzanp@gmail.com";
		$config['smtp_pass'] = "resep1415dokter";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$config['validation'] = TRUE;
		$this->email->initialize($config);

		//Kirim Email
		$this->email->to($email);
		$this->email->from('mfauzanp@gmail.com','ADMIN');
		$this->email->subject('Thanks from Yummy Eatery');
		$this->email->message('Terimakasih atas feedback yang anda berikan. Kepuasan Anda membuat kami puas :)');
		$this->email->send();

        $data_insert = array(
			'timestamp' => time(),
            'nama' => $nama,
			"email" => $email,
			"pesan" => $pesan
			);
        var_dump($email);
		$res = $this->My_Model->InsertData('feedback',$data_insert);
		if($res>=1){
			redirect('MyController/index');
        }
		else{
			echo "<h2> GAGAL</h2>";
		}
    }
}
?>
