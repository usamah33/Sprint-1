<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('crud_m');
		$this->load->helper('url');
	}

	//Function for Rute Table

	function tampil(){
		$data['rute'] = $this->crud_m->tampil_data()->result();
		$this->load->view('tampil', $data);
	}

	function departlist(){
		$data['rute'] = $this->crud_m->tampil_data()->result();
		$this->load->view('index2', $data);
	}

	function v_input(){
		$this->load->view('v_input');
	}

	function index(){
		$this->load->view('index');
	}

	function book(){
		$data['rute'] = $this->crud_m->tampil_data()->result();
		$this->load->view('book', $data);
	}

	function tambah_aksi(){
		$from = $this->input->post('from');
		$to = $this->input->post('to');
		$date = $this->input->post('depart');
		$price = $this->input->post('prices');

		$data = array(
			'rute_from' => $from,
			'rute_to' => $to,
			'depart_on' => $date,
			'price' => $price
		);
		$this->crud_m->input_data($data, 'rute');
		redirect('insert/index');
	}

	function hapus($id){
		$where = array('ruteid' => $id);
		$this->crud_m->hapus_record($where, 'rute');
		redirect('index.php/insert/tampil');
	}

	function tambah(){
		$ruteid = $this->input->post('ruteid');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$transportid = $this->input->post('transportid');
		$data = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at,
			'price' => $price,
			'transportid' => $transportid
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$this->crud_m->tambah_data($where, $data, 'rute');
		redirect('index.php/insert/departlist');
	}

	function edit_rute($id){
		$where = array ('ruteid' => $id);
		$data['rute'] = $this->crud_m->edit_datarute($where, 'rute')->result();
		$this->load->view('v_edit', $data);
	}

	function update_rute(){
		$ruteid = $this->input->post('ruteid');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$transportid = $this->input->post('transportid');
		$data = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at,
			'price' => $price,
			'transportid' => $transportid
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$this->crud_m->update_datarute($where, $data, 'rute');
		redirect('index.php/insert/departlist');
	}
}
?>