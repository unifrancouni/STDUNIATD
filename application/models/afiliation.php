<?php

class Afiliation extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Obtener Afiliados
    public function getAfiliados()
    {
        $query = $this->db->query('select * from scaafiliacion where where nstbestadoafiliacionid=7');
        return $query->result();
    }

    //Obtener cantidad de Afiliados
    public function  obtenerCantidadAfiliados()
    {
        $consulta = "select count(*) as cantidad from scaafiliacion where nstbestadoafiliacionid=7";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->cantidad;
    }

    //Obtener cantidad de Solicitudes
    public function  obtenerCantidadSolicitudes()
    {
        $consulta = "select count(*) as cantidad from scaafiliacion where nstbestadoafiliacionid=5";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->cantidad;
    }

    public function grabarSolicitudAfiliacion($nombre, $apellido1, $apellido2, $cedula,
                                              $profesion, $estado_civil, $inss, $direccion,
                                              $tel, $celular, $tel_uni, $ext, $email1, $email2,
                                              $facultad, $ubicacion, $categoria, $grado, $nomina_uni,
                                              $fecha_ingreso, $observaciones)
    {
        //Insertamos persona
        $consulta = "insert into stbpersona values (NULL, '$nombre', '$apellido1', '$apellido2', '$cedula', NULL, NULL, NULL, NOW(), NULL, NULL)";
        $query = $this->db->query($consulta);
        //Obtenemos el id de la persona recien-ingresada
        $consulta = "select nStbPersonaID from stbpersona where sCedula='$cedula'";
        $query = $this->db->query($consulta);
        $res = $query->result();
        $id_persona=$res[0]->nStbPersonaID;
        //Ingresamos Afiliacion
        $consulta = "insert into scaafiliacion
                      values (NULL, $id_persona, $profesion, $estado_civil, $inss, '$direccion', $facultad,
                      $ubicacion, $categoria, $grado, $nomina_uni, $fecha_ingreso, '$observaciones', 5, NOW())";
        $query = $this->db->query($consulta);
        //Ingresamos los contactos de dicha persona
        if($tel!=null and $tel!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 18, '$tel', NULL, NOW(), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($celular!=null and $celular!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 19, '$celular', NULL, NOW(), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($tel_uni!=null and $tel_uni!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 20, '$tel_uni', NULL, NOW(), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($ext!=null and $ext!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 21, '$ext', NULL, NOW(), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($email1!=null and $email1!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 2, '$email1', NULL, NOW(), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($email2!=null and $email2!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 2, '$email2', NULL, NOW(), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
    }
}