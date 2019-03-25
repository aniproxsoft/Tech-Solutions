<?php
class MdlRegistro
{
    public function __construct()
    {
    }

    //variables
    private $id_empresa;
    private $direccion;
    private $nombre_empresa;
    private $id_estado;
    private $nombre_estado;
    private $id_ciudad;
    private $nombre_ciudad;
    private $codigo_postal;
    private $id_usuario;
    private $num_telefono;
    private $folio_convenio;
    private $rfc;
    private $status;

    //Getters and Setters
    public function getDireccion()
    {
        return $this->direccion;
    }
    public function getNombreEmpresa()
    {
        return $this->nombre_empresa;
    }
    public function getIDEstado()
    {
        return $this->id_estado;
    }
    public function getNombreEstado()
    {
        return $this->nombre_estado;
    }
    public function getIDCiudad()
    {
        return $this->id_ciudad;
    }
    public function getNombreCiudad()
    {
        return $this->nombre_ciudad;
    }
    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }
    public function getIDUsuarioE()
    {
        return $this->id_usuario;
    }
    public function getNumTelefono()
    {
        return $this->num_telefono;
    }
    public function getFolioConvenio()
    {
        return $this->folio_convenio;
    }
    public function getRFC()
    {
        return $this->rfc;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function setIDEmpresa($id_empresa)
    {
        $this->id_empresa = $id_empresa;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function setNombreEmpresa($nombre_empresa)
    {
        $this->nombre_empresa = $nombre_empresa;
    }

    public function setIDEstado($id_estado)
    {
        $this->id_estado = $id_estado;
    }
    public function setNombreEstado($nombre_estado)
    {
        $this->nombre_estado = $nombre_estado;
    }
    public function setIDCiudad($id_ciudad)
    {
        $this->id_ciudad = $id_ciudad;
    }
    public function setNombreCiudad($nombre_ciudad)
    {
        $this->nombre_ciudad = $nombre_ciudad;
    }
    public function setCodigoPostal($codigo_postal)
    {
        $this->codigo_postal = $codigo_postal;
    }
    public function setIDUsuarioE($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    public function setNumTelefono($num_telefono)
    {
        $this->num_telefono = $num_telefono;
    }
    public function setFolioConvenio($folio_convenio)
    {
        $this->folio_convenio = $folio_convenio;
    }
    public function setRFC($rfc)
    {
        $this->rfc = $rfc;
    }
    public function setStatus($status)
    {
        $this->status = $status;
    }


  //Conexion DB
		public function conexionDB(){
			$con=mysqli_connect("localhost","root","","job_crusade") or
			die("Problemas con la conexion a la base de datos");
			return $con;
		}

  //Mostrar ciudad
      public function listarEstado(){
    		$registros = mysqli_query ($conexion,"SELECT id_estado, nombre_estado FROM estado")
                or die(mysql_error($conexion));
                //mysqli_close();
                while ($reg = mysqli_fetch_array($registros)) {
                  echo '<option value="'.$reg['id_estado'].'">'.$reg["nombre_estado"].'</option>';
                }
	  }

        //Mostrar ciudad
      public function listarCiudades(){
			$registros = mysqli_query ($conexion,"SELECT id_ciudad, nombre_ciudad FROM ciudad")
            or die(mysql_error($conexion));
            while($reg=mysqli_fetch_array($registros)){
            echo '<option value="'.$reg['id_ciudad'].'">'.$reg["nombre_ciudad"].'</option>';
            }
		}


  public function agregarUsuario(){
    $registros=mysql_query($conexion, "SELECT * from estado ed, cuidad c,empresa e, usuario u  where ed.id_estado=c.id_estado and c.id_ciudad=e.id_ciudad and e.id_usuario=u.id_usuario") or 
        die("Error en el registro:".mysqli_error($conexion));
        if($resultado = mysqli_fetch_array($registros)){
                $regU=mysqli_query($conexion,"INSERT INTO usuario(
                        id_usuario,
                        nombre,
                        apellidos,
                        email,
                        password,
                        id_rol,
                        status)
                        values(
                        '$this->id_usuario',
                        '$this->nombre',
                        '$this->apellidos',
                        '$this->email',
                        '$this->email',
                        '$this->password',
                        '$this->id_rol',
                        '$this->status'
                        )")
                        or die("Problemas con query:".mysqli_error());
                        //header("location: ../Modulos/Registrate/CtrlRegistroE.php");

    $regE=mysqli_query($conexion,"INSERT INTO empresa(id_empresa,
                        direccion,
                        nombre,
                        id_estado,
                        id_ciudad,
                        codigo_postal,
                        id_usuario,
                        num_telefono,
                        folio_convenio,
                        rfc,
                        status
                        )values(
                        '$this->id_empresa',
                        '$this->direccion',
                        '$this->id_estado',
                        '$this->id_ciudad',
                        '$this->codigo_postal',
                        '$this->id_usuario',
                        '$this->num_telefono',
                        '$this->folio_convenio',
                        '$this->rfc',
                        '$this->status')")
                        or die("Problemas con query:".mysqli_error());
                       // header("location: ../Modulos/Registrate/CtrlRegistroE.php");
                        }
                        else{
                         //     echo "Error en el registro"; 
                        }
  }
													   
													   
														


}
