<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Core_Model');
	}

	function dataresult()
	{
		print_r($this->Core_Model->rute_custom_sel("Jakarta", "Tokyo", "2018/02/24", "25"));
	}

	function payment()
	{
		$datasession = $this->session->userdata();
		$data = array(
			'datasession' => $datasession,

		);
		$this->load->view('client/payment', $data);
	}

	function book($a, $b, $c)
	{
		$dataget = $this->Core_Model->sel_rute_w_transportation_by_id($a);
		$dataprice = array(
			'passengers' => $b,
			'total_price' => intval($dataget[0]->price) * intval($b),
			'passenger' => $c
		);
		$datasession = $this->session->userdata();
		$data = array(
			'datasession' => $datasession,
			'dataget' => $dataget,
			'dataprice' => $dataprice
		);
		$this->load->view('client/header');
		$this->load->view('client/book', $data);
		$this->load->view('client/footer');
	}

	function search()
	{
		$datainput = array(
			'from' => $this->input->get('from'),
			'to' => $this->input->get('to'),
			'departure' => $this->input->get('departure'),
			'passengers' => $this->input->get('passengers')
		);
		$dataget = $this->Core_Model->rute_custom_sel($datainput['from'], $datainput['to'], $datainput['departure'], $datainput['passengers']);
		$datarute = $this->db->get('rute')->result();
		$datasession = $this->session->userdata();
		$data = array(
			'datasession' => $datasession,
			'dataget' => $dataget,
			'datainput' => $datainput,
			'datarute' => $datarute
		);

		//print_r($dataget);

		$this->load->view('client/header');
		$this->load->view('client/search', $data);
		$this->load->view('client/footer');
	}

	function index()
	{
		$datarute = $this->db->get('rute')->result();
		$datasession = $this->session->userdata();
		$data = array(
			'datasession' => $datasession,
			'datarute' => $datarute
		);

		$this->load->view('client/header-index');
		$this->load->view('client/index', $data);
		$this->load->view('client/footer');
	}
}
