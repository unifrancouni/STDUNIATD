<?php

class Visitas extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function nuevaVisita($x)
    {
        if($this->existeVisitaUsuario($x)>0)
        {
            $res=$this->actualizarVisita($x);
            return $res;
        }
        else{
            $res=$this->agregarVisita($x);
            return $res;
        }
    }

    public function existeVisitaUsuario($x)
    {
        $consulta = "select count(nStiVisitaID) as cantidad
                     from stivisita where sNombreUsuario='$x' and dFechaVisita=DATE(NOW())";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->cantidad;
    }

    public function agregarVisita($x)
    {
        $consulta = "insert into stivisita values (NULL,DATE(NOW()),'$x',1)";
        $query = $this->db->query($consulta);
        if($query)
            return false;
        return true;
    }

    public function actualizarVisita($x)
    {
        $consulta = "update stivisita set nCantidadSesionesFecha=nCantidadSesionesFecha+1 where sNombreUsuario='$x'
                     and dFechaVisita=DATE(NOW())";
        $query = $this->db->query($consulta);
        if($query)
            return false;
        return true;
    }

    public function obtenerCantidadVisitasHoy()
    {
        $consulta = "select count(nStiVisitaID) as cantidad
                     from stivisita where dFechaVisita=DATE(NOW())";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->cantidad;
        /* *** Cantidad visitas mes ***
         *  SELECT MONTH( dFechaVisita ) , SUM( nCantidadSesionesFecha )
            FROM stivisita
            GROUP BY MONTH( dFechaVisita )
         */
    }

}