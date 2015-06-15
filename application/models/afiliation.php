<?php

class Catalogs extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Obtener catalogos
    public function getAfiliados()
    {
        $query = $this->db->query('select * from scaafiliacion');
        return $query->result();
    }

    //Obtener cantidad de catalogos
    public function  obtenerCantidadAfiliados()
    {
        $consulta = "select count(*) as cantidad from scaafiliacion where nstbestadoafiliacionid=7";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->cantidad;
    }


}