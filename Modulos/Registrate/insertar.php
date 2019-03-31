<?php
require_once "../../php/conexion/ClassConnection.php";
require_once "../../php/DTO/UsuarioDTO.php";
include "../../Modulos/Registrate/MdlRegistro.php";
$db       = new connectionDB();
$conexion = $db->get_connection();
$usuario = new UsuarioDTO();
 
$statement = $conexion->prepare("CALL sp_registrar_empresa(?,?,?,?,?,?,?,?,?,?,?,?)");
//string s int i poner todos los atributos
$statement->bind_param("ssssssiiisss", $nombre,$apellidos,$email, $password,$direccion,$nombre_empresa, $id_estado, $id_ciudad, $codigo_postal, $num_telefono, $folio_convenio, $rfc);
//$sql="CALL sp_registrar_empresa($nombre,$apellidos,$email, $password,$direccion,$nombre_empresa, $id_estado, $id_ciudad, $codigo_postal, $num_telefono, $folio_convenio, $rfc)";

$statement->execute();/* or die (implode(':',$statement->errorInfo());*/
//iduser flag msj en el orden q return

$statement->bind_result($flag,$msj,$id_user);

$statement->fetch();
$usuario->setNombre($nombre);
$usuario->setApellidos($apellidos);
$usuario->setEmail($email);
$usuario->setPassword($password);
$usuario->setDireccion($direccion);
$usuario->setNombreEmpresa($nombre_empresa);
$usuario->setIDEstado($id_estado);
$usuario->setIDCiudad($id_ciudad);
$usuario->setCodigoPostal($codigo_postal);
$usuario->setNumTelefono($num_telefono);
$usuario->setFolioConvenio($folio_convenio);
$usuario->setRFC($rfc);

if ($flag == true) {
    /*session_start();
    $_SESSION['usuario'] = serialize($usuario);
    header("Location:../Vacantes/inicio_vacantes.php");*/
    ?> 
	<script type="text/javascript">
		alert("Registro exitoso. Su solicitud esta en proceso")
		location.href="iniciar_sesion.html";
		//poner msj q esta en bd
	</script>
	<?php
} else {
    ?>
	<script type="text/javascript">
		alert("Error no se inserto en la primera tabla") 
		//location.href="../../Modulos/Registrate/formUserRegistrarse.html";
		//poner msj q esta en bd
	</script>
	<?php
}
	$statement->close();
	$conexion->close();
	?>