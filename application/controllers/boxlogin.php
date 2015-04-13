<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Boxlogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
		$this->load->library('Session');
	}

	public function index()
	{
        $this->users->CorregirURI();

		$s = $this->session->userdata('sNombreUsuario');
		if(empty($s)){
			$this->load->view('invitado/boxlogin');
		}
		else
		{
			redirect(base_url().'dashboard');
		}

	}

}