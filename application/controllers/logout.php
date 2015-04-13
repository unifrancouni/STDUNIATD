<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
		$this->load->library('Session');
	}

	public function index()
	{
        $verificado = $this->input->post('valor');
        if ($verificado=='1')
            $this->session->sess_destroy();
        redirect(base_url().'boxlogin');
	}

}