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
        if(!isset($existe)) //Setear variable la primera vez
        {
            $this->session->set_flashdata('usuario_invalido',0);
            $this->session->set_flashdata('usuario_mensaje','');
        }

        $existe=$this->session->flashdata('solicitud_enviada');
        if(!isset($existe)) //Setear variable la primera vez
        {
            $this->session->set_flashdata('solicitud_enviada',0);
        }


		$s = $this->session->userdata('sNombreUsuario');
		if(empty($s)){
            $data=array();

            $data['usuario_invalido'] = $this->session->flashdata('usuario_invalido');
            $data['usuario_mensaje'] = $this->session->flashdata('usuario_mensaje');
            $data['solicitud_enviada'] = $this->session->flashdata('solicitud_enviada');

            //Para los combo-box (select's)
            $data['profesion']=$this->catalogs->obtenerValoresCatalogos('06');
            $data['estado_civil']=$this->catalogs->obtenerValoresCatalogos('07');
            $data['facultad']=$this->catalogs->obtenerValoresCatalogos('10');
            $data['ubicacion']=$this->catalogs->obtenerValoresCatalogos('08');
            $data['categoria']=$this->catalogs->obtenerValoresCatalogos('09');
            $data['grado']=$this->catalogs->obtenerValoresCatalogos('11');


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