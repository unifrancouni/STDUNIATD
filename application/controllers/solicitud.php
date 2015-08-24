<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Solicitud extends CI_Controller
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

    public function solicitar()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('nombre', 'Nombres', 'required');
        $this->form_validation->set_rules('apellido1', 'Primer Apellido', 'required');
        $this->form_validation->set_rules('cedula', 'Numero Cedula', 'required');
        $this->form_validation->set_rules('profesion', 'Profesion', 'required');
        $this->form_validation->set_rules('estado_civil', 'Estado Civil', 'required');
        $this->form_validation->set_rules('inss', 'INSS', 'required');
        //$this->form_validation->set_rules('direccion', 'Password', 'required');
        //$this->form_validation->set_rules('tel', 'Password', 'required');
        //$this->form_validation->set_rules('celular', 'Password', 'required');
        //$this->form_validation->set_rules('tel_uni', 'Password', 'required');
        //$this->form_validation->set_rules('ext', 'Password', 'required');
        //$this->form_validation->set_rules('email1', 'Password', 'required');
        //$this->form_validation->set_rules('email2', 'Password', 'required');
        $this->form_validation->set_rules('facultad', 'Facultad', 'required');
        $this->form_validation->set_rules('ubicacion', 'Ubicacion', 'required');
        $this->form_validation->set_rules('categoria', 'Categoria', 'required');
        $this->form_validation->set_rules('grado', 'Grado', 'required');
        $this->form_validation->set_rules('nomina_uni', 'Nomina', 'required');
        $this->form_validation->set_rules('fecha_ingreso', 'Fecha Ingreso', 'required');
        //$this->form_validation->set_rules('observaciones', 'Password', 'required');



        $nombre = $this->input->post('nombre');
        $apellido1 = $this->input->post('apellido1');
        $apellido2 = $this->input->post('apellido2');
        $cedula = $this->input->post('cedula');
        $profesion = $this->input->post('profesion');
        $estado_civil = $this->input->post('estado_civil');
        $inss = $this->input->post('inss');
        $direccion = $this->input->post('direccion');
        $tel = $this->input->post('tel');
        $celular = $this->input->post('celular');
        $tel_uni = $this->input->post('tel_uni');
        $ext = $this->input->post('ext');
        $email1 = $this->input->post('email1');
        $email2 = $this->input->post('email2');
        $facultad = $this->input->post('facultad');
        $ubicacion = $this->input->post('ubicacion');
        $categoria = $this->input->post('categoria');
        $grado = $this->input->post('grado');
        $nomina_uni = $this->input->post('nomina_uni');
        $fecha_ingreso = $this->input->post('fecha_ingreso');
        $observaciones = $this->input->post('observaciones');

        //$usuario = $_POST['email'];
        //$passwd = $_POST['password'];

        if ($this->form_validation->run() === FALSE)
        {
            $this->session->set_flashdata('usuario_invalido',1);
            $this->session->set_flashdata('usuario_mensaje','Debe llenar todos los campos requeridos.');
            redirect(base_url().'boxlogin');
        }
        else
        {
            $this->afiliation->grabarSolicitudAfiliacion($nombre, $apellido1, $apellido2, $cedula,
                $profesion, $estado_civil, $inss, $direccion, $tel, $celular, $tel_uni, $ext, $email1, $email2,
                $facultad, $ubicacion, $categoria, $grado, $nomina_uni, $fecha_ingreso, $observaciones);

            $idTipoNotificacion = $this->catalogs->obtenerValorCatalogoID('TipoNotificacion', '01');

            $descripcion = "Solicitud de afilicación (".$nombre." ".$apellido1.")";
            $idAfiliacion=$this->afiliation->obtenerAfiliacionID($cedula);

            $this->notifications->grabarNotificacion($idTipoNotificacion, $descripcion, $idAfiliacion);

            $this->session->set_flashdata('usuario_invalido',0);
            $this->session->set_flashdata('solicitud_enviada',1);
            $this->session->set_flashdata('usuario_mensaje','La solicitud se ha enviado con éxito.'.$hoy);
            redirect(base_url().'boxlogin');
        }
    }

}