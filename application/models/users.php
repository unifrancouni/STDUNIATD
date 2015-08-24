<?php

	class Users extends CI_Model
	{
		public function __construct()
		{
			parent::__construct();
		}

		//Obtener usuarios
		public function getUsers()
		{
			$query = $this->db->query('select * from ssgcuenta');
			return $query->result();
		}

		//Saber si un usuario X existe
		public function existeUser($x)
		{
			$query = $this->db->query("select * from ssgcuenta where sNombreUsuario='$x' ");
			$res = $query->result();
			if(!empty($res[0]->sNombreUsuario))
				return TRUE;
			else
				return FALSE;
		}

        //Obtener el ID de un usuario X
        public function obtenerIdUsuario($x)
        {
            $query = $this->db->query("SELECT U.nSsgUsuarioID FROM ssgusuario U inner join ssgcuenta C on C.nSsgCuentaID=U.nSsgCuentaID
                                      WHERE C.sNombreUsuario='$x'");
            $res = $query->result();
            return $res[0]->nSsgUsuarioID;
        }

		//Obtener Password del usuario X
		public function obtenerPassword($x)
		{
			$query = $this->db->query("select sClave from ssgcuenta where sNombreUsuario='$x' ");
			$res = $query->result();
			return $res[0]->sClave;
		}

        //Devuelve 1=SuperUsuario, 2=Administrador, 3=UsuarioComun, 4=Invitado
        public function obtenerNivelCargo($x)
        {
            $consulta = "select CONVERT( stbvalorcatalogo.scodigointerno, UNSIGNED) as nivel
                from ssgcuenta inner join ssgusuario on ssgusuario.nssgcuentaid=ssgcuenta.nssgcuentaid
                inner join stbvalorcatalogo on stbvalorcatalogo.nstbvalorcatalogoid=ssgusuario.nstbcargopersonaid
                where ssgcuenta.snombreusuario='$x'";
            $query = $this->db->query($consulta);
            $res = $query->result();
            return $res[0]->nivel;
        }

        //Obtiene nombre de Imagen de Perfil del usuario
        function obtenerImagen($x) {
            $consulta = "select sDireccionImagenPerfil
                from ssgcuenta inner join ssgusuario on ssgusuario.nssgcuentaid=ssgcuenta.nssgcuentaid
                where ssgcuenta.snombreusuario='$x'";
            $query = $this->db->query($consulta);
            $res = $query->result();
            return $res[0]->sDireccionImagenPerfil;
        }

        //Sustituye por una foto común en caso de no tener foto de perfil
        function obtenerImagenDefinitiva($x)
        {
            $imagen = $this->obtenerImagen($x);
            if (!isset($imagen))
            {
                return 'user_default.jpg';
            }
            else
            {
                if(empty($imagen))
                {
                    return 'user_default.jpg';
                }
                else
                {
                    return $imagen;
                }
            }
        }

        //Obtiene el nombre del usuario
        public function obtenerNombreUsuario($x)
        {
            $consulta = "select concat(sNombre,' ',sApellido1) as sNombreUsuario
                from ssgcuenta inner join ssgusuario on ssgusuario.nssgcuentaid=ssgcuenta.nssgcuentaid
                inner join stbpersona on stbpersona.nstbpersonaid=ssgusuario.nstbpersonaid
                where ssgcuenta.snombreusuario='$x'";
            $query = $this->db->query($consulta);
            $res = $query->result();
            return $res[0]->sNombreUsuario;
        }

        //Corrige la URI antes de entrar en un controller (URL's Amigables)
        public function CorregirURI()
        {
            $count=0;
            $newURI = str_replace('index.php/','',$_SERVER['REQUEST_URI'],$count);
            if ($count>0)
            {
                redirect('http://'.$_SERVER['HTTP_HOST'].$newURI);
            }
        }
	}

?>