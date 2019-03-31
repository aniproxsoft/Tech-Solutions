
<?php
 require_once "../../php/conexion/ClassConnection.php";    
class MdlRegistro
{
    public function __construct()
    {
    }
   
    private $nombre_usuario;    
    private $apellidos;    
    private $email;
   private $password;
   private $id_rol;
   private $status; 
    /*user getters and setters
    public function getNombreUsuario()
    {
        return $this->nombre_usuario;
    }
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function getEmail()
    {
        return $this->email;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function setNombreUsuario($nombre_usuario)
    {
        $this->nombre_usuario = $nombre_usuario;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setIDRol($id_rol)
    {
        $this->id_rol = $id_rol;
    }
    public function setStatus_usuario($status_usuario)
    {
        $this->status_usuario = $status_usuario;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    //Getters and Setters
/*---------------------------------------------------------------------------------------------------------------------*/
//Inicializar las variables
        public function inicializar(
                   
                    $nombre,
                    $apellidos,
                    $email,
                    $password,
                    $id_rol,
                    $status
                                    ){
        
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->password = $password;
        $this->id_rol = $id_rol;
        $this->status_usuario = $status_usuario;
    }
/*------------------------------------------------------------------------------------------------------------------------*/

        public function realizarRegistro(){
                $db       = new connectionDB();
                $conexion = $db->get_connection();
                
                $con=mysqli_query($conexion,"INSERT INTO usuario (nombre, apellidos,email,password,id_rol,status) 
                                               VALUES ('$this->nombre','$this->apellidos','$this->email','$this->password',1,1)")
                                               or die("Problemas en el select".mysqli_error($con));
                /*$conE=mysqli_query($conexion,"INSERT INTO empresa (direccion, nombre, id_estado, id_ciudad, codigo_postal,id_usuario,num_telefono,folio_convenio,rfc, status) VALUES (direccion_em,nombre_em,estado,ciudad,cp,id_user,telefono,folio,rfc_em,3) WHERE id_usuario=(max(id_usuario)");*/

                    echo"<script type=\"text/javascript\">alert('Usuario Agregado'); window.location='Index.html';</script>"; 
                
        }                   


/*-------------------------------------------------------------------------------------------------------------------------*/
  
  /*public function agregarUsuario(){
    $db       = new connectionDB();
    $conexion = $db->get_connection();    

    if ('$_POST["nombre_usuario"]'!="" and '$_POST["apellidos"]'!="" and '$_POST["email"]'!="" and '$_POST["id_rol"]' !="" and '$_POST["status_usuario"]'!="" and '$_POST["password"]'!=""){
            /*if($_POST["password"])==$_POST["password2"])){
                echo "No coincide password";
            }else {*/
       /*         $registros=mysqli_query($conexion, "SELECT * from usuario WHERE id_usuario=(SELECT MAX(id_usuario) as id FROM usuario)") 
                or die("Error en el registro:".mysqli_error($conexion));
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
                        '$resultado[0]->setIDUsuario(id_usuario)',                        
                        '$resultado[1]->setNombreUsuario(nombre)',
                        '$resultado[2]->setApellidos(apellidos)',
                        '$resultado[3]->setEmail(email)',
                        '$resultado[4]->setPassword(password)',
                        '$resultado[5]->setIDRol(id_rol)',
                        '$resultado[6]->setStatus_usuario(status)'                        
                        )")
                        or die("Problemas con query:".mysqli_error($conexion));
                         echo "<table class='striped centered responsive-table'>
                            <thead>
                            <tr>
                                <th data-field='id'>Nombre</th>
                                <th data-field='id'>apellidos</th>
                                <th data-field='id'>email</th>
                                <th data-field='id'>id_rol</th>
                                <th data-field='id'>status_usuario</th>
                                <th data-field='acciones'>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>";
                            // header("location: ../Modulos/Registrate/CtrlRegistroE.php");
                            }
  }else{
                              echo "Error en el registro"; 
                        }
}*/
}
?>
