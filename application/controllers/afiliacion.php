<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Afiliacion extends CI_Controller
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

    }

    public function confirmarSolicitud()
    {
        $cedula=$this->input->post('cedula');
        $estadoID=$this->catalogs->obtenerValorCatalogoID('Estado Afiliación', '03');
        $afiliacionID=$this->afiliation->obtenerAfiliacionID($cedula);
        $this->afiliation->setEstadoAfiliacion($afiliacionID, $estadoID);
        $this->notifications->leerNotificacion($afiliacionID);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function rechazarSolicitud()
    {
        $cedula=$this->input->post('cedula');
        $estadoID=$this->catalogs->obtenerValorCatalogoID('Estado Afiliación', '02');
        $afiliacionID=$this->afiliation->obtenerAfiliacionID($cedula);
        $this->afiliation->setEstadoAfiliacion($afiliacionID, $estadoID);
        $this->notifications->leerNotificacion($afiliacionID);

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


}