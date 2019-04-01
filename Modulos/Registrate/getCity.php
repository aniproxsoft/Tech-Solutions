<?php
require_once "../../php/conexion/ClassConnection.php";

function carga_datos()
{
    $id_estado = $_POST['id'];
    $db        = new connectionDB();
    $conexion  = $db->get_connection();
    $query     = "SELECT id_ciudad,nombre_ciudad FROM ciudad WHERE id_estado= $id_estado";
    $res       = $conexion->query($query);
    $html      = "<option id='estado' name='estado'  value=''>Seleccionar </option>";
    while ($row = $res->fetch_assoc()) {
        $html .= "<option value='" . $row['id_ciudad'] . "'>" . $row['nombre_ciudad'] . "</option>";
    }

    return $html;

}
echo carga_datos();
