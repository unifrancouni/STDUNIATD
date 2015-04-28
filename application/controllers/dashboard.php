<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users');
        $this->load->model('news');
        $this->load->model('visitas');
        $this->load->library('Session');
    }

    public function index()
    {
        $this->users->CorregirURI();
        $s = $this->session->userdata('sNombreUsuario');
        $data=array();
        $data['imagen']=$this->obtenerImagenDefinitiva();
        $data['nombre_usuario']=$this->users->obtenerNombreUsuario($this->session->userdata('sNombreUsuario'));

        if(!empty($s)){
            $nivel_cargo=$this->users->obtenerNivelCargo($s);
            if($nivel_cargo==1)
            {
                $data['cant_afiliados']=$this->users->obtenerCantidadAfiliados();
                $data['cant_noticias']=$this->news->obtenerCantidadNoticias();
                $data['cant_visitas']=$this->visitas->obtenerCantidadVisitasHoy();

                $this->load->view('miembro/agremiado/generales/head', $data);
                $this->load->view('miembro/agremiado/generales/cabecera_azul', $data);
                $this->load->view('miembro/agremiado/generales/panel_izquierdo', $data);

                $this->load->view('miembro/directivo/dashboard/cuerpo', $data);

                $this->load->view('miembro/agremiado/generales/pie', $data);
                $this->load->view('miembro/directivo/dashboard/pie_dashboard', $data);
                $this->load->view('miembro/agremiado/generales/final', $data);
            }
            else
            {
                $this->session->set_flashdata('usuario_invalido',1);
                $this->session->set_flashdata('usuario_mensaje','El administrador está dando mantenimiento.');
                redirect(base_url().'boxlogin');
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