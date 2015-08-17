<?php

class Afiliation extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //Confirmar y/o Rechazar una solicitud
    public function setEstadoAfiliacion($idAfiliacion, $estadoID)
    {
        $this->db->query("update scaafiliacion set nStbEstadoAfiliacionID=$estadoID where nScaAfiliacionID=$idAfiliacion");
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

    //Obtener el ID de una afilicaión dada la cédula de la persona
    public function obtenerAfiliacionID($cedula)
    {
        $consulta = "SELECT A.nScaAfiliacionID FROM scaafiliacion A inner join
                      stbpersona P on P.nStbPersonaID=A.nStbPersonaID
                      where P.sCedula='$cedula'";
        $query = $this->db->query($consulta);
        $res = $query->result();
        return $res[0]->nScaAfiliacionID;
    }

    public function grabarSolicitudAfiliacion($nombre, $apellido1, $apellido2, $cedula,
                                              $profesion, $estado_civil, $inss, $direccion,
                                              $tel, $celular, $tel_uni, $ext, $email1, $email2,
                                              $facultad, $ubicacion, $categoria, $grado, $nomina_uni,
                                              $fecha_ingreso, $observaciones)
    {
        //Revisar que persona con misma cedula no exista
        $consulta = "select nStbPersonaID from stbpersona where sCedula='$cedula'";
        $query = $this->db->query($consulta);
        $res = $query->num_rows();
        if ($res==0){
            //Insertamos persona
            $consulta = "insert into stbpersona values (NULL, '$nombre', '$apellido1', '$apellido2', '$cedula', NULL, NULL, NULL, DATE(NOW()), NULL, NULL)";
            $query = $this->db->query($consulta);
            //Obtenemos el id de la persona recien-ingresada
            $consulta = "select nStbPersonaID from stbpersona where sCedula='$cedula'";
            $query = $this->db->query($consulta);
            $res = $query->result();
            $id_persona=$res[0]->nStbPersonaID;
        }
        else{
            //Revisamos que la persona no tenga solicitudes de ningun tipo
            $consulta = "select nScaAfiliacionID from scaafiliacion a inner join stbpersona p on a.nStbPersonaID=p.nStbPersonaID
                      where p.sCedula='$cedula'";
            $query = $this->db->query($consulta);
            $res = $query->num_rows();
            $bueno=0;
            if($res=0)
            {
                $bueno=1;
            }
            else
            {
                //La mas reciente solicitud debe ser unicamente
                $consulta = "select nScaAfiliacionID, MAX(a.dFechaCreacion) from scaafiliacion a inner join stbpersona p on a.nStbPersonaID=p.nStbPersonaID
                      where p.sCedula='$cedula' ";
                $query = $this->db->query($consulta);

                //Si ha hecho solicitudes, solo se permiten rechazado e inactivo para volver a solicitar
                $consulta = "select nScaAfiliacionID from scaafiliacion a inner join stbpersona p on a.nStbPersonaID=p.nStbPersonaID
                      inner join stbvalorcatalogo vc on a.nStbEstadoAfiliacionID=vc.nStbValorCatalogoID
                      inner join stbcatalogo c on vc.nStbCatalogoID=c.nStbCatalogoID
                      where c.sCodigoInterno='05' and vc.sCodigoInterno<>'02' and vc.sCodigoInterno<>'05'
                      and p.sCedula='$cedula'";
                $query = $this->db->query($consulta);
                $res = $query->result();
            }

        }

        //Obtenemos el id de la persona recien-ingresada
        $consulta = "select nStbPersonaID from stbpersona where sCedula='$cedula'";
        $query = $this->db->query($consulta);
        $res = $query->result();
        $id_persona=$res[0]->nStbPersonaID;

        //Ingresamos Afiliacion
        $consulta = "insert into scaafiliacion
                      values (NULL, $id_persona, $profesion, $estado_civil, $inss, '$direccion', $facultad,
                      $ubicacion, $categoria, $grado, $nomina_uni, $fecha_ingreso, '$observaciones', 5, DATE(NOW()))";
        $query = $this->db->query($consulta);
        //Ingresamos los contactos de dicha persona
        if($tel!=null and $tel!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 18, '$tel', NULL, DATE(NOW()), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($celular!=null and $celular!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 19, '$celular', NULL, DATE(NOW()), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($tel_uni!=null and $tel_uni!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 20, '$tel_uni', NULL, DATE(NOW()), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($ext!=null and $ext!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 21, '$ext', NULL, DATE(NOW()), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($email1!=null and $email1!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 2, '$email1', NULL, DATE(NOW()), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
        if($email2!=null and $email2!=""){
            $consulta = "insert into stbcontactopersona values (NULL, $id_persona, 2, '$email2', NULL, DATE(NOW()), NULL, NULL)";
            $query = $this->db->query($consulta);
        }
    }
}