<?php
require_once "../../php/conexion/ClassConnection.php";
require_once "../../php/DTO/UsuarioDTO.php";
$db             = new connectionDB();
$conexion       = $db->get_connection();
$usuario        = new UsuarioDTO();
$nombre         = $_POST['nombre'];
$apellidos      = $_POST['apellidos'];
$email          = $_POST['email'];
$pass           = $_POST['pass'];
$nombre_empresa = $_POST['nombre_e'];
$direccion      = $_POST['direccion'];
$id_estado      = $_POST['estaditos'];
$id_ciudad      = $_POST['city'];
$codigo_postal  = $_POST['postal'];
$num_telefono   = $_POST['telefono'];
$folio_convenio = $_POST['convenio'];
$rfc            = $_POST['rfc'];

$statement = $conexion->prepare("CALL sp_registrar_empresa(?,?,?,?,?,?,?,?,?,?,?,?)");

$statement->bind_param("ssssssiiisss", $nombre, $apellidos, $email, $pass, $direccion, $nombre_empresa, $id_estado, $id_ciudad, $codigo_postal, $num_telefono, $folio_convenio, $rfc);
$statement->execute();

$statement->bind_result($flag, $msg, $id_user);
$statement->fetch();
// echo $flag . "-" . $msg;

if ($flag === 1) {

    echo "<script type='text/javascript'>alert('" . $msg . "     puedes iniciar sesión');location.href='../login/iniciar_sesion.html';</script >";

} else {
    echo "<script type = 'text/javascript' >alert('" . $msg . "');location.href='registroEM.php';</script>";

}
