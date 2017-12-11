<?php
class user_model extends CI_Model {

	// function getData() {
	// 	$query = $this->db->get('admin');
	// 	return $query->result_array();
	// }
	function authen_customer($username, $password)
	{
		$this->db->select('*');
		$this->db->where('username', $username); //ngecel apakah usernamenya ada di database
		$this->db->where('password', $password); 
		$this->db->from('customer');
		$query = $this->db->get();
		
		if ($query->num_rows() == 1) {
			return true;
		}
		else {
			return false;
		}
	}

	function authen_admin($username, $password) {
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('admin');
		$query = $this->db->get();

    if ($query->num_rows() == 1) {
			return true;
		}
		else {
			return false;
		}
	}

	function addAcc($data){
		$this->db->insert('customer',$data);
	}

	public function GetPesanan($username){
	    $this->db->select('id_pesanan, alamat, menu, jumlah, total_harga, Status_Order');
	    $this->db->from('pesanan');
	 	$this->db->where('username', $username);
	 	$data = $this->db->get();

	    return $data->result_array();
	  	}

  	public function GetDataCus($where=""){
		$data = $this->db->query('SELECT * FROM customer '.$where);
		return $data->result_array();
	}

  	public function delete_order($id){
  		$this->db->where('id_pesanan', $id)
           		 ->delete('pesanan');
  	}
}

?>
