<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');class Catalogos extends CI_Controller {    public function __construct()    {        parent::__construct();        $this->load->model('users');        $this->load->model('catalogs');        $this->load->model('notifications');        $this->load->library('Session');    }    public function index()    {        $this->users->CorregirURI();        $s = $this->session->userdata('sNombreUsuario');        $data=array();        $data['imagen']=$this->obtenerImagenDefinitiva();        $data['nombre_usuario']=$this->users->obtenerNombreUsuario($this->session->userdata('sNombreUsuario'));        $data['año_actual']=date("Y").'';        if(!empty($s)){            $nivel_cargo=$this->users->obtenerNivelCargo($s);            if($nivel_cargo==1)            {                //$data['cant_afiliados']=$this->users->obtenerCantidadAfiliados();                //$data['cant_noticias']=$this->news->obtenerCantidadNoticias();                //$data['cant_visitas']=$this->visitas->obtenerCantidadVisitasHoy();                $data['next_code']=$this->catalogs->obtenerCodigoSiguiente();                $data['cant_notificaciones']=$this->notifications->obtenerCantidadNotificaciones();                $data['notificaciones']=$this->notifications->verNotificaciones();                $this->load->view('miembro/agremiado/generales/head', $data);                $this->load->view('miembro/agremiado/generales/cabecera_azul', $data);                $this->load->view('miembro/agremiado/generales/panel_izquierdo', $data);                $data['Catalogos']=$this->catalogs->getCatalogos();                $this->load->view('miembro/directivo/catalogos/cuerpo', $data);                $this->load->view('miembro/agremiado/generales/pie', $data);                $this->load->view('miembro/directivo/catalogos/pie_catalogos', $data);                $this->load->view('miembro/agremiado/generales/final', $data);            }            else            {                $this->session->set_flashdata('usuario_invalido',1);                $this->session->set_flashdata('usuario_mensaje','El administrador está dando mantenimiento.');                redirect(base_url().'boxlogin');            }        }        else        {            $this->session->set_flashdata('usuario_invalido',1);            $this->session->set_flashdata('usuario_mensaje','Sesión Expirada.');            redirect(base_url().'boxlogin');        }    }    public function agregarCatalogo()    {        $this->load->library('form_validation');        $userID=$this->users->obtenerIdUsuario($this->session->userdata('sNombreUsuario'));        $this->form_validation->set_rules('codigo', 'Código', 'required');        $this->form_validation->set_rules('descripcion', 'Descripción', 'required');        $code = $this->input->post('codigo');        $description = $this->input->post('descripcion');        if ($this->form_validation->run() === FALSE)        {        }        else        {            $this->catalogs->agregarCatalogo($code, $description, $userID);            redirect(base_url().'catalogos');        }    }    private function obtenerImagenDefinitiva()    {        $imagen = $this->users->obtenerImagen($this->session->userdata('sNombreUsuario'));        if (!isset($imagen))        {            return 'user_default.jpg';        }        else        {            if(empty($imagen))            {                return 'user_default.jpg';            }            else            {                return $imagen;            }        }    }}