<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Valorescatalogos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users');
        $this->load->model('afiliation');
        $this->load->model('news');
        $this->load->model('visitas');
        $this->load->model('catalogs');
        $this->load->model('notifications');
        $this->load->library('Session');
    }

    public function index()
    {
        $this->users->CorregirURI();
        $s = $this->session->userdata('sNombreUsuario');
        $data=array();
        $data['imagen']=$this->obtenerImagenDefinitiva();
        $data['nombre_usuario']=$this->users->obtenerNombreUsuario($this->session->userdata('sNombreUsuario'));
        $data['año_actual']=date("Y").'';

        if(!empty($s)){
            $nivel_cargo=$this->users->obtenerNivelCargo($s);

            if($nivel_cargo==1)
            {
                $catalogoID = $this->input->post('catalogoID');


                if($catalogoID==FALSE)
                {
                    redirect(base_url().'catalogos');
                }

                //$data['cant_afiliados']=$this->users->obtenerCantidadAfiliados();
                //$data['cant_noticias']=$this->news->obtenerCantidadNoticias();
                //$data['cant_visitas']=$this->visitas->obtenerCantidadVisitasHoy();

                $data['next_code']=$this->catalogs->obtenerCodigoSiguienteVC($catalogoID);

                $data['cant_notificaciones']=$this->notifications->obtenerCantidadNotificaciones();
                $data['notificaciones']=$this->notifications->verNotificaciones();
                $data['catalogoID']=$catalogoID;

                $this->load->view('miembro/agremiado/generales/head', $data);
                $this->load->view('miembro/agremiado/generales/cabecera_azul', $data);
                $this->load->view('miembro/agremiado/generales/panel_izquierdo', $data);
                $data['ValoresCatalogos']=$this->catalogs->getValoresCatalogos($catalogoID);
                $this->load->view('miembro/directivo/valorescatalogos/cuerpo', $data);

                $this->load->view('miembro/agremiado/generales/pie', $data);
                $this->load->view('miembro/directivo/valorescatalogos/pie_valorescatalogos', $data);
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
            $this->session->set_flashdata('usuario_mensaje','Sesión Expirada.');
            redirect(base_url().'boxlogin');
        }

    }

    public function editarValorCatalogo()
    {
        $this->load->library('form_validation');

        $userID=$this->users->obtenerIdUsuario($this->session->userdata('sNombreUsuario'));

        $this->form_validation->set_rules('codigo', 'Código', 'required');
        $this->form_validation->set_rules('valor', 'Descripción', 'required');
        $this->form_validation->set_rules('valorCatalogoID', 'Valor_Catálogo_ID', 'required');

        $code = $this->input->post('codigo');
        $description = $this->input->post('valor');
        $activo = $this->input->post('estado');
        $valorCatalogoID = $this->input->post('valorCatalogoID');

        if ($this->form_validation->run() === FALSE)
        {
            redirect(base_url().'dashboard');
        }
        else
        {
            $this->catalogs->editarValorCatalogo($valorCatalogoID, $code, $description, $activo, $userID);
            redirect(base_url().'catalogos');
        }
    }

    public function agregarValorCatalogo()
    {
        $this->load->library('form_validation');

        $userID=$this->users->obtenerIdUsuario($this->session->userdata('sNombreUsuario'));

        $this->form_validation->set_rules('codigo', 'Código', 'required');
        $this->form_validation->set_rules('valor', 'Descripción', 'required');
        $this->form_validation->set_rules('catalogoID', 'CatalogoID', 'required');
        $code = $this->input->post('codigo');
        $description = $this->input->post('valor');
        $catalogoID = $this->input->post('catalogoID');

        if ($this->form_validation->run() === FALSE)
        {
            redirect(base_url().'dashboard');
        }
        else
        {
            $this->catalogs->agregarValorCatalogo($catalogoID, $code, $description, $userID);
            redirect(base_url().'catalogos');
        }
    }

    public function eliminarValorCatalogo()
    {
        $valorCatalogoID = $this->input->post('valorCatalogoID');
        $this->catalogs->eliminarValorCatalogo($valorCatalogoID);
        redirect(base_url().'catalogos');
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