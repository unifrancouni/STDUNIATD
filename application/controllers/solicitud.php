<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users');
        $this->load->library('Session');
    }

    public function index()
    {
        $this->users->CorregirURI();
        $existe=$this->session->flashdata('error_registracion');
        if(!isset($existe))
        {
            $this->session->set_flashdata('error_registracion',0);
            $this->session->set_flashdata('usuario_mensaje','');
        }

        $data=array();
        $this->load->view('invitado/registro', $data);


    }

}