<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notificaciones extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users');
        $this->load->model('afiliation');
        $this->load->library('Session');
        $this->load->model('notifications');
        $this->load->model('catalogs');
    }

    public function index()
    {
        $this->users->CorregirURI();
        $s = $this->session->userdata('sNombreUsuario');
        $data=array();
        $data['imagen']=$this->obtenerImagenDefinitiva();
        $data['nombre_usuario']=$this->users->obtenerNombreUsuario($this->session->userdata('sNombreUsuario'));
        $data['año_actual']=date("Y").'';

        if(!empty($s)) {
            $nivel_cargo = $this->users->obtenerNivelCargo($s);

            if ($nivel_cargo == 1) {

                $data['cant_notificaciones']=$this->notifications->obtenerCantidadNotificaciones();
                $data['notificaciones']=$this->notifications->verNotificaciones();

                $this->load->view('miembro/agremiado/generales/head', $data);
                $this->load->view('miembro/agremiado/generales/cabecera_azul', $data);
                $this->load->view('miembro/agremiado/generales/panel_izquierdo', $data);
                $this->load->view('miembro/agremiado/notificaciones/cuerpo', $data);
                $this->load->view('miembro/agremiado/notificaciones/pie_notificaciones', $data);
                $this->load->view('miembro/agremiado/generales/pie', $data);
                $this->load->view('miembro/agremiado/generales/final', $data);

            }
        }
        else
        {
            $this->session->set_flashdata('usuario_invalido',1);
            $this->session->set_flashdata('usuario_mensaje','Sesión expirada.');
            redirect(base_url().'boxlogin');
        }

    }

    private function obtenerImagenDefinitiva()
    {
        $imagen = $this->users->obtenerImagen($this->session->userdata('sNombreUsuario'));
        if (!isset($imagen))
        {
            return 'user_default.jpg';
        }
        else
        {
            if(empty($imagen))
            {
                return 'user_default.jpg';
            }
            else
            {
                return $imagen;
            }
        }
    }

}