<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->library('upload');
    $this->load->model('user_model');
    $this->load->model('MyModel');

    if ($this->session->userdata('role')!='customer') { //!$this->session->userdata('username') && 
      redirect('login_user/index');
    }
  }

	public function index()
	{
    $namapemesan = $this->session->userdata('username');
    $data = $this->user_model->GetPesanan($namapemesan);
		$this ->load->view('user_pesanan', array('data' => $data));
	}

  function yummypesan($id_menu) {
    $user = $this->session->userdata('username');
    $menu = $this->MyModel->GetYummyEatery("where id_menu = '$id_menu'");
    $customer = $this->user_model->GetDataCus("where username = '$user'");
    $data = array(
      "id_menu" => $menu[0]['id_menu'],
      "nama_menu" => $menu[0]['nama_menu'],
      "gambar" => $menu[0]['gambar'],
      "deskripsi" => $menu[0]['deskripsi'],
      "harga" => $menu[0]['harga'],
      "namalengkap" => $customer[0]['fullname'],
      "kontak" => $customer[0]['no_hp'],
      "alamat" => $customer[0]['alamat']
    );
    $this -> load -> view('yummypesan', $data);
    }

  function yummysukses($id_menu) {
    $menu = $this->MyModel-> GetYummyEatery("where id_menu = '$id_menu'");
    $user = $this->session->userdata('username');

    $nama_pemesan = $_POST['nama_pemesan'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $jumlah = $_POST['jumlah'];
    $total_harga = $jumlah * $menu[0]['harga'];

    $data_pemesan = array(
        'id_pesanan' => time(),
        'nama_pemesan' => $nama_pemesan,
        'username' => $user,
        'no_telp' => $no_telp,
        'alamat' => $alamat,
      'menu' => $menu[0]['nama_menu'],
        'jumlah' => $jumlah,
      'total_harga' => $total_harga,
      'Status_Order' => "Belum Dibayar"
      );
    $res = $this->MyModel->InsertData('pesanan',$data_pemesan);
      if ($res>=1) {
        $this->load->view('yummysukses');
      } else {
      echo "<h2>Data gagal untuk ditambahkan</h2>";
    }
  }

  public function addPayment($idPesanan)
  {
                $config['upload_path']          = './gambar/buktitf/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10000000;
                $config['max_height']           = 100000000;
                $config['file_name']   = $idPesanan . '.jpg';
                $config['overwrite']    = TRUE;

                $this->upload->initialize($config);
                if ( ! $this->upload->do_upload('foto_payment'))
                {
                    echo $this->upload->display_errors();
                }
                else
                {
                   $this->index();
                }
  }

  public function cancel_order($id){
    $this->user_model->delete_order($id);
    redirect('user');
  }
}
