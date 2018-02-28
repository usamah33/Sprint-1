<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Login extends CI_Controller {
	function __construct()
	{
		parent::__construct();	}
	
	function signupsuccess()
	{
		$this->load->view('login/header');
		$this->load->view('login/signupsuccess');
		$this->load->view('login/footer');
	}

	function signup()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$confirm_password = md5($this->input->post('confirm_password'));
		$fullname = $this->input->post('fullname');
		$level = 2;

		if(isset($username)) {
			if ($password == $confirm_password)
			{
				$datainput = array(
					'username' => $username,
					'password' => $password,
					'fullname' => $fullname,
					'level' => $level
				);

				$this->db->insert('user', $datainput);

				redirect('index.php/login/signupsuccess');
			}
			elseif ($password != $confirm_password)
			{
				$not_confirmed = 1;
				$this->load->view('login/header');
				$this->load->view('login/signup', $not_confirmed);
				$this->load->view('login/footer');
			}
		}
		else
		{
			$this->load->view('login/header');
			$this->load->view('login/signup');
			$this->load->view('login/footer');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('client');
	}

	function index()
	{
		if ($this->session->userdata('username') !== null)
		{
			redirect('client');
		}

		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$datainput = array(
			'username' => $username,
			'password' => $password
		);

		$dataget = $this->db->get_where('user', $datainput);

		if ($dataget->num_rows() > 0 )
		{
			$dataresult = $dataget->result();
			$datasession = array(
				'username' => $dataresult[0]->username,
				'fullname' => $dataresult[0]->fullname,
				'level' => $dataresult[0]->level
			);

			$this->session->set_userdata($datasession);
			redirect('index.php/client');
		}

		$this->load->view('login/header');
		$this->load->view('login/index');
		$this->load->view('login/footer');
	}
}