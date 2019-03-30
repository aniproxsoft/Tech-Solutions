<?php
require_once "../../php/conexion/ClassConnection.php";
require_once "../../php/DTO/UsuarioDTO.php";
$db       = new connectionDB();
$conexion = $db->get_connection();
$usuario = new UsuarioDTO();
/*$usuario->setNombre($_POST['nombre_u']);
$usuario->setApellidos($_POST['apellidos']);
$usuario->setEmail($_POST['email']);
$usuario->setPassword($_POST['pass']);
$usuario->setDireccion($_POST['direccion']);
$usuario->setNombreEmpresa($_POST['nombre_e']);
$usuario->setNombreEstado($_POST['estado']);
$usuario->setNombreCiudad($_POST['ciudad']);
$usuario->setCodigoPostal($_POST['cp']);
$usuario->setNumTelefono($_POST['telefono']);
$usuario->setFolioConvenio($_POST['convenio']);
$usuario->setRFC($_POST['rfc']);
*/
$statement = $conexion->prepare("CALL sp_registrar_empresa (?,?,?,?,?,?,?,?,?,?,?,?)");

//string s int i poner todos los atributos
$statement->bind_param("ssssssiiisss",$nombre, $apellidos, $email, $password,/*$id_rol, $status,*/$direccion, $nombre_empresa, $nombre_estado, $nombre_ciudad, $codigo_postal, $num_telefono, $folio_convenio, $rfc);

$statement->execute();
//iduser flag msj en el orden q return
$statement->bind_result($flag, $msj, $id_user);
/*
$statement->fetch();
$usuario->setNombre($nombre);
$usuario->setApellidos($apellidos);
$usuario->setEmail($email);
$usuario->setPassword($password);
$usuario->setDireccion($direccion);
$usuario->setNombreEmpresa($nombre_empresa);
$usuario->setNombreEstado($nombre_estado);
$usuario->setNombreCiudad($nombre_ciudad);
$usuario->setCodigoPostal($codigo_postal);
$usuario->setNumTelefono($num_telefono);
$usuario->setFolioConvenio($folio_convenio);
$usuario->setRFC($rfc);
$usuario->setStatus($status);
$usuario->setIDRol($id_rol);
/*
if ($flag == 1) {
    /*session_start();
    $_SESSION['usuario'] = serialize($usuario);
    header("Location:../Vacantes/inicio_vacantes.php");*/
    /*?>
	<script type="text/javascript">
		alert("Registro exitoso. Su solicitud esta en proceso")
		location.href="iniciar_sesion.html";
		//poner msj q esta en bd
	</script>
	<?php
} else {
    ?>
	<script type="text/javascript">
		//alert("Error no se inserto en la primera tabla")
		//location.href="../../Modulos/Registrate/formUserRegistrarse.html";
		//poner msj q esta en bd
	</script>
	<?php

}  */
$statement->close();
$conexion->close();
?>


<!---------------------------------------------------------------------------------------------------------------------------->
<!--?php 
    require_once "../../php/conexion/ClassConnection.php";    
	$db       = new connectionDB();
	$conexion = $db->get_connection();


/*--------------------------------------------------------------------------------------------------------------------------*/


			include('MdlRegistro.php');

			$usuario = new MdlRegistro();

			
			
			if ('$_REQUEST[nombre_usuario]'==!null){
				
				$usuario->inicializar(
									'$_REQUEST[nombre_usuario]',
									'$_REQUEST[apellidos]',
				                    '$_REQUEST[email]',
									'$_REQUEST[password]',
									'$_REQUEST[id_rol]',																	
									'$_REQUEST[status_usuario]'									
									);
			   
			   $usuario->agregarUsuario();
			
			}else {
				if('$_REQUEST[nombre_usuario]'==null){
					
				echo "Debe llenar todos los campos";
				
			} 
			}

			//$conexion;
			
?>




/*----------------------------------------------------------------------------------------------------------------------------*/
/*	
 class inserta {
	public function agregar(){
		$nombreU = $_POST['nombre'];
		$apellidosU = $_POST['apellidos'];
		$emailU = $_POST['email'];
		$passwordU = $_POST['password'];
		$id_rolU = 1;
		$statusU = 3;

		$registros=mysqli_query($conexion , "select * from usuarios where id_usuario=id_empresa") or 
			die("Problemas en el select:".mysqli_error($conexion));
			 
			if($resultado = mysqli_fetch_array($registros)){
									$conexion=mysqli_query($conexion,"INSERT INTO usuario  (
	   nombre,
	   apellidos,
	   email,
	   password,
	   id_rol,
	   status )
    VALUES (
	   $nombreU,
	   $apellidosU,
	   $emailU,
	   $passwordU,
	   $id_rolU,
	   $statusU )")
	   or die("Problemas al ingresar datos".mysqli_error($conexion));
									header("location: ../Modulos/Registrate/formUserRegistrarse.html");
									//echo"bien";
									
								}
								else{
									header("location: ../Modulos/Registrate/registroEm.php");
									//echo"mal";
								}


	}

}
 ?>
 */
