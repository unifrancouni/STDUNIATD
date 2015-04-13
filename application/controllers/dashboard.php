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
        if(!empty($s)){
            if($this->users->obtenerNivelCargo($s)==1)
            {
                $data=array();

                $data['imagen']=$this->obtenerImagenDefinitiva();

                $data['nombre_usuario']=$this->users->obtenerNombreUsuario($this->session->userdata('sNombreUsuario'));
                $data['cant_afiliados']=$this->users->obtenerCantidadAfiliados();
                $data['cant_noticias']=$this->news->obtenerCantidadNoticias();
                $data['cant_visitas']=$this->visitas->obtenerCantidadVisitasHoy();

                $this->load->view('directivo/head', $data);
                $this->load->view('directivo/cabecera_azul', $data);
                $this->load->view('directivo/panel_izquierdo', $data);

                $this->load->view('directivo/cuerpo', $data);

                $this->load->view('directivo/pie', $data);
            }
            else
            {
                echo 'Por el momento solo el administrador puede entrar.';
            }
        }
        else
        {
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