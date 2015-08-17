<?php

class Notifications extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function grabarNotificacion($idTipoNotificacion, $descripcion, $campoUnion)
    {
        $consulta = "insert into stinotificacion
                    (nStbTipoNotificacion, nSgrCampoUnionID, dFechaHoraNotificacion, nLeida, sDescripcion)
                    values
                    ($idTipoNotificacion, $campoUnion, NOW(), 0, '$descripcion')";
        $this->db->query($consulta);
    }

    public function leerNotificacion($nSgrCampoUnionID)
    {
        $this->db->query("update stinotificacion set nLeida=1 where nSgrCampoUnionID=$nSgrCampoUnionID");
    }

    public function verNotificaciones()
    {
        $consulta = "SELECT * FROM `vwsolicitudafiliacion`";

        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res;
    }

    public function obtenerCantidadNotificaciones()
    {
        $consulta = "select count(nStiNotificacionID) cantidad from stinotificacion where nLeida=0";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->cantidad;
    }

}