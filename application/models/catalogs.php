<?php

class Catalogs extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Obtener catalogos
    public function getCatalogos()
    {
        $query = $this->db->query('select * from stbcatalogo');
        return $query->result();
    }

    //Obtener cantidad de catalogos
    public function  obtenerCantidadCatalogos()
    {
        $consulta = "select count(nStbCatalogoID) as cantidad from stbcatalogo";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->cantidad;
    }

}