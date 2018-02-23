<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('crud_m');
	}

	public function index()
	{
		$this->load->view('v_home');
	}

	function carirute(){
		// var_dump(isset($this->input->get('from'));
		// 	die
		// if ($this->input->get('from') !== null) {

			$rute_from = $this->input->get('rute_from');
			$rute_to = $this->input->get('rute_to');
			$departat = $this->input->get('departat');
			$passengers = $this->input->get('passengers');

			$departat = explode('/', $departat);
			$departat = $departat[2].'-'.$departat[1].'-'.$departat[0];
		// var_dump($departure);
		// die;

			$class = $this->input->get('class');
			$where = array(
				'date(depart_at)' => $departat,
				'rute_from' => $rute_from,
				'rute_to' => $rute_to,

				'class' => $class
				);

			$data['rute'] = $this->crud_m->tampilrute($where,'tb_rute')->result();
			$data['passengers'] = $passengers;
			$this->load->view('v_tampil_rute',$data);

		// }
		// else{
		// 	redirect(base_url());
		// }
	}
}