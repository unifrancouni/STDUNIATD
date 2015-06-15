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

    public function obtenerValoresCatalogos($cod_catalogo)
    {
        $consulta = "select vc.nStbValorCatalogoID, vc.sDescripcion from stbcatalogo as c
                      inner join stbvalorcatalogo as vc on vc.nStbCatalogoID=c.nStbCatalogoID
                      where c.sCodigoInterno=$cod_catalogo";

        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res;
    }

}