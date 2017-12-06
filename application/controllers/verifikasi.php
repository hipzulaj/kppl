<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('email');
	}

    public function submit(){
    //passing post data dari view
    $this->load->helper(array('form', 'url'));
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');
  
    //memasukan ke array
    $data = array(
     'username' => $username,
     'password' => $password,
     'nama' => $nama,
     'email' => $email,
     'active' => 0
     );
    //tambahkan akun ke database
    $this->load->model('m_register');
    $id = $this->m_register->add_account($data);
  
    //enkripsi id
    $encrypted_id = md5($id);
    public function confirm_buy(){
		$nama = $_POST['nama_pemesan'];
		$no_telp = $_POST['no_telp'];
		$alamat = $_POST['alamat'];
        $menu = $_POST['menu'];
        $jumlah = $_POST['jumlah'];

        $data = array(
                'nama_pemesan' => $nama_pemesan,
                'no_telp' => $no_telp,
                'alamat' => $alamat,
                'menu' => $menu,
                'jumlah' => jumlah,
                'active' => 0
                );
        
        //enkripsi id
        $encrypted_id = md5($id_pesanan);
        
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
		$this->email->from('mfauzanp@gmail.com','Yummy Eatery');
		$this->email->subject('Konfirmasi Pembelian');
		$this->email->message('Apakah Anda yakin akan membeli menu sesuai pesanan Anda? Klik link berikut jika setuju <br><br>'.
                             site_url());
        
		if ($this->email->send()) {
            redirect();
        } else {
            echo "Konfirmasi gagal.";
        }

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