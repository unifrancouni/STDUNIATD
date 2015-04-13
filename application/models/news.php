<?php

class News extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function obtenerCantidadNoticias()
    {
        $query = $this->db->query("select count(nStiNoticiaID) cantidad from stinoticia where dFechaPublicacion=DATE(NOW())");
        $res = $query->result();
        return $res[0]->cantidad;
    }
}