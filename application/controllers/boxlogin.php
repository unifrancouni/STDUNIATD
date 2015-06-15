<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Boxlogin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('users');
        $this->load->model('catalogs');
		$this->load->library('Session');
	}

	public function index()
	{
        $this->users->CorregirURI();

        $existe=$this->session->flashdata('usuario_invalido');
        if(!isset($existe))
        {
            $this->session->set_flashdata('usuario_invalido',0);
            $this->session->set_flashdata('usuario_mensaje','');
        }


		$s = $this->session->userdata('sNombreUsuario');
		if(empty($s)){
            $data=array();

            $data['usuario_invalido'] = $this->session->flashdata('usuario_invalido');
            $data['usuario_mensaje'] = $this->session->flashdata('usuario_mensaje');
            $data['profesion']=0;
            $data['estado_civil']=$this->catalogs->obtenerValoresCatalogos('07');


			$this->load->view('invitado/login', $data);

            $this->session->set_flashdata('usuario_invalido',0);
            $this->session->set_flashdata('usuario_mensaje','');

		}
		else
		{
            // if remember me then acces else not acces
			redirect(base_url().'dashboard');
		}

	}

}