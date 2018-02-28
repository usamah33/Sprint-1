<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('crud_m');
	}

	function tampil() {
		$data['user'] = $this->crud_m->tampil_data_user()->result();
		$this->load->view('u_tampil', $data);
	}

	function hapus($id) {
		$where = array('userid' => $id);
		$this->crud_m->hapus_record($where, 'user');
		redirect('index.php/User/tampil');
	}
}
?>