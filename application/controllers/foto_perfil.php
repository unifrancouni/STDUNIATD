<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Foto_perfil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('users');
        $this->load->library('Session');
    }

    function cargar_archivo() {

        $mi_archivo = 'PU_'.$this->session->userdata('sNombreUsuario');
        $config['upload_path'] = base_url()."/images/images_perfil/";
        $config['file_name'] = 'PU_'.$this->session->userdata('sNombreUsuario').'.jpg';
        $config['allowed_types'] = "*.jpg";
        $config['max_size'] = "10000";
        $config['max_width'] = "100";
        $config['max_height'] = "100";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($mi_archivo)) {
            //*** ocurrio un error
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }

        $data['uploadSuccess'] = $this->upload->data();
    }
}

?>