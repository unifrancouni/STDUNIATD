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
        $consulta = "select count(nStbCatalogoID) as cantidad from stbcatalogo where nActivo=1";
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

    public function obtenerValorCatalogoID($nombre_catalogo, $codigo_valor)
    {
        $consulta = "SELECT V.nStbValorCatalogoID FROM stbcatalogo C inner join stbvalorcatalogo V on V.nStbCatalogoID=C.nStbCatalogoID
                      where C.sDescripcion='$nombre_catalogo' and
                      V.sCodigoInterno='$codigo_valor'";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->nStbValorCatalogoID;
    }

    public function agregarCatalogo($cod, $descripcion, $usuarioID)
    {
        $consulta = "insert into stbcatalogo
                      (sCodigoInterno, sDescripcion, nActivo, nUsuarioCreacionID, dFechaCreacion, nUsuarioModificacionID, dFechaModificacion)
                      values
                      ('$cod','$descripcion',1,$usuarioID,NOW(),NULL,NULL)";
        $this->db->query($consulta);
    }

    public function obtenerCodigoSiguiente()
    {
        $consulta = "select MAX(sCodigoInterno)+1 nextCode from stbcatalogo";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->nextCode;
    }

}