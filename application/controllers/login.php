<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
        $this->load->model('visitas');
		$this->load->library('Session');

	}

	//Validar usuario y password
	public function validarUser($usuario, $passwd)
	{
		if($this->users->existeUser($usuario) and $this->users->obtenerPassword($usuario)==$passwd)
			return TRUE;
		else
			return FALSE;
	}

	public function user()
	{
        $data = array();

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$usuario = $this->input->post('email');
		$passwd = $this->input->post('password');
		//$usuario = $_POST['email'];
		//$passwd = $_POST['password'];



		if ($this->form_validation->run() === FALSE)
		{
            $this->session->setSessionVar('usuario_invalido');
            redirect(base_url().'boxlogin');
		}
		else
		{
			if($this->validarUser($usuario, $passwd))
			{
				$newdata = array(
									'sNombreUsuario' => $usuario
				);
				$this->session->set_userdata($newdata);
                $this->visitas->nuevaVisita($usuario);
				redirect(base_url().'dashboard');
			}
			else
            {
                $this->session->setSessionVar('usuario_invalido');
                redirect(base_url().'boxlogin');
            }
		}
	}

	public function email()
	{
		/*$this->load->library('form_validation');

		$this->form_validation->set_rules('email-recupera', 'Email', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('invitado/boxlogin');
		}
		else
		{
			if($this->validarUser($usuario, $passwd))
				redirect(base_url().'index.php/noticias');
			else
				redirect(base_url().'index.php/boxlogin');
		}*/
	}


}