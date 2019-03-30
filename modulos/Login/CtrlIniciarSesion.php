<?php
require_once "../../php/conexion/ClassConnection.php";
require_once "../../php/DTO/UsuarioDTO.php";
$db       = new connectionDB();
$conexion = $db->get_connection();

$usuario = new UsuarioDTO();

$usuario->setEmail($_POST['email']);
$usuario->setPassword($_POST['password']);

$statement = $conexion->prepare("CALL sp_autentification(?,?)");

$correo   = $usuario->getEmail();
$password = $usuario->getPassword();
//string s int i poner todos los atributos
$statement->bind_param("ss", $correo, $password);

$statement->execute();
//iduser flag msj en el orden q return
$statement->bind_result($flag, $id_rol, $nombre, $apellidos, $email, $nombre_rol, $nombre_empresa, $direccion, $nombre_estado, $nombre_ciudad, $codigo_postal, $num_telefono, $folio_convenio, $rfc, $status);

$statement->fetch();
$usuario->setNombre($nombre);
$usuario->setApellidos($apellidos);
$usuario->setNombreRol($nombre_rol);
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
if ($flag == 1 and $usuario->getIDRol() == 1) {
    session_start();
    $_SESSION['usuario'] = serialize($usuario);
    header("Location:../Vacantes/inicio_vacantes.php");
} else {
    ?>
	<script type="text/javascript">
		alert("Error contraseña y/o correo incorrecto")
		location.href="iniciar_sesion.html";
		//poner msj q esta en bd
	</script>
	<?php

}
$statement->close();
$conexion->close();
?>
