<?php
require_once "../../php/conexion/ClassConnection.php";
include "../../php/DTO/UsuarioDTO.php";
$db       = new connectionDB();
$conexion = $db->
    get_connection();
$usuario = new UsuarioDTO();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
        <meta content="" name="description">
            <meta content="" name="author"/>
            <title>
                Job Crusade
            </title>
            <!-- Bootstrap Core CSS -->
            <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
            <link href="../../css/formularios.css" rel="stylesheet"/>
            <!-- Custom Fonts -->
            <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"/>
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"/>
            <link href="../../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet"/>
            <!-- Custom CSS -->
            <link href="../../css/stylish-portfolio.min.css" rel="stylesheet"/>
        </meta>



    </head>
    <body id="page-top">
        <!-- Navigation -->
        <a class="menu-toggle rounded" href="#">
            <i class="fas fa-bars">
            </i>
        </a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <img src="../../img/logo-job2" style="width: 26%">
                        <a class="js-scroll-trigger" href="../../index.html">
                            Job Crusade
                        </a>
                    </img>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="../../index.html">
                        Inicio
                    </a>
                </li>
                <!-- <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#tabla_empleos">
                        Empleos
                    </a>
                </li> -->
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="../Registrate/registroEM.php">
                        ¿Solicitas empleados? Registrate
                    </a>
                </li>
                <!-- <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="modulos/Login/iniciar_sesion.html">
                        Iniciar sesión
                    </a>
                </li> -->
            </ul>
        </nav>
        <section class="content-section2 bg-primary text-white text-center">
            <center>
                <div id="datos_usuario">
                    <div class="container">
                        <div class="content-section-heading" style="margin-top: -80px">
                            <h2 class="text-secondary mb-0">
                                Crea tu cuenta con Job crusade
                            </h2>
                            <br>
                            </br>
                            <div id="datos_empresa">
                                <div class="container">
                                    <div class="content-section-heading">
                                        <h3>
                                            Datos de usuario
                                        </h3>
                                        <hr>
                                        </hr>
                                        <center>
                                            <form action="insertar.php" id="Registrar" method="post">
                                                <div id="formulario">
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend" style="margin-left: 20px">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                Nombre
                                                            </span>
                                                        </div>
                                                        <input aria-describedby="input" aria-label="small" class="form-control" id="nombre" maxlength="50" minlength="3" name="nombre" pattern="[A-Z a-z]{3,50}" required="true" style="width:  60%" title="Ingresa unicamente letras mínimo 3 caracteres máximo 50" type="text" value="">
                                                        </input>
                                                    </div>
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend" style="margin-left: 20px">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                Apellidos
                                                            </span>
                                                        </div>
                                                        <input aria-describedby="input" aria-label="small" class="form-control" id="apellidos" name="apellidos" maxlength="50" minlength="3" pattern="[A-Za-z]{3,50}" required="true" style="width:  60%" title="Ingresa unicamente letras mínimo 3 caracteres máximo 50" type="text" value="">
                                                        </input>
                                                    </div>
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend" style="margin-left: 20px">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                Email
                                                            </span>
                                                        </div>
                                                        <input aria-describedby="input" aria-label="small" class="form-control" id="email" maxlength="50" minlength="3" name="email" required="true" type="email" value="">
                                                        </input>
                                                    </div>
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend" style="margin-left: 20px">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                Contraseña
                                                            </span>
                                                        </div>
                                                        <input aria-describedby="input" aria-label="small" class="form-control" id="pass" maxlength="50" minlength="3" name="pass" required="true" type="password" value="">
                                                        </input>
                                                    </div>
                                                    <div class="input-group input-group-sm mb-3">
                                                        <div class="input-group-prepend" style="margin-left: 20px">
                                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                Confirmar contraseña
                                                            </span>
                                                        </div>
                                                        <input onkeyup="validarPassword()" aria-describedby="input" aria-label="small" class="form-control" id="confirm" maxlength="50" minlength="3" name="confirm" required="true" style="width:  60%" type="password" value="">
                                                        </input>
                                                        <div  id="msgError" style="color:#ecb807; margin-left:20px"></div>
                                                    </div>
                                                </div>
                                                <div class="container">
                                                    <div class="content-section-heading">
                                                        <hr>
                                                            <h3>
                                                                Datos de empresa
                                                            </h3>
                                                            <hr/>

                                                        </hr>
                                                        <div id="formulario">
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend" style="margin-left: 20px">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                        Empresa
                                                                    </span>
                                                                </div>
                                                                <input pattern="[A-Za-z0-9]{3,50}" aria-describedby="input" title="Mínimo 3 caracteres máximo 50" aria-label="small" class="form-control" id="nombre_e" name="nombre_e" required="true" type="text" value="">
                                                                </input>
                                                                <div class="input-group-prepend" style="margin-left: 20px">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                        Estado
                                                                    </span>
                                                                </div>
                                                                <select id="estaditos" name="estaditos" required="true">
                                                                    <option    value="">
                                                                        Seleccionar
                                                                    </option>
                                                                    <?php
$registros = mysqli_query($conexion, "SELECT id_estado, nombre_estado FROM estado")
or die(mysql_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
    echo '<option value="' . $reg['id_estado'] . '">' . $reg["nombre_estado"] . '</option>';
}
?>
                                                                </select>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                               <div class="input-group-prepend" style="margin-left: 20px">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                        Código postal
                                                                    </span>
                                                                </div>
                                                                <input aria-describedby="input" aria-label="small" class="form-control" pattern="[0-9]{4,11}" title="Mínimo 4 digitos máximo 11" minlength="4" maxlength="11" onkeypress="return soloNumeros(event)" required="true" type="number" id="postal" name="postal" value="">
                                                                </input>
                                                                <div class="input-group-prepend" style="margin-left: 20px" >
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                        Ciudad
                                                                    </span>
                                                                </div>
                                                                <select required="true" id="city" name="city">
                                                                </select>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend" style="margin-left: 20px">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                        Número de teléfono
                                                                    </span>
                                                                </div>
                                                                <input aria-describedby="input" aria-label="small" class="form-control" pattern="[0-9]{10,13}" title="Mínimo 10 digitos máximo 13" minlength="10" maxlength="13" onkeypress="return soloNumeros(event)" required="true" type="tel" id="telefono" name="telefono" value="">
                                                                </input>
                                                                <div class="input-group-prepend" style="margin-left: 20px">
                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                    RFC
                                                                    </span>
                                                                </div>
                                                                <input pattern="([A-Z]{4}([0-9]{6})([A-Z]{1})([0-9]{2}))" aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text" value="" name="rfc" id="rfc">
                                                                </input>
                                                            </div>
                                                            <br>
                                                            <div class="input-group input-group-sm mb-3">
                                                             <div class="input-group-prepend" style="margin-left: 20px">

                                                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                        Dirección
                                                                    </span>

                                                                </div>
                                                                <input aria-describedby="input" ppattern="[A-Za-z0-9]{3,50}" aria-label="small" class="form-control" title="Mínimo 3 caracteres máximo 50" id="direccion" name="direccion" required="true" type="text" value="">
                                                                </input>
                                                            </div>
                                                            <div class="input-group input-group-sm mb-3">
                                                                <div class="input-group-prepend" style="margin-left: 20px">

                                                                    <input style="width: 40px" type="checkbox" id="estadia" value="" onchange="isConvenio()">
                                                                    </input>Empresa para estadía
                                                                    </div>
                                                                </div>
                                                                <div id="isconvenio" style="display: none;">
                                                                   <div class="input-group input-group-sm mb-3">
                                                                    <div class="input-group-prepend" style="margin-left: 20px">
                                                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                                                            Convenio UTN
                                                                    </span>
                                                                    </div>
                                                                    <input aria-describedby="input" aria-label="small" class="form-control" pattern="[A-Za-z0-9]{15,15}"   type="text" title="Debe ingresar 15 caracteres" value="" name="convenio" id="convenio">
                                                                    </input>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-12">
                                                    <input class="btn btn-dark" id="borrar" type="reset" value="limpiar"/>
                                                    <a class="btn btn-danger" href="../../index.html">
                                                        Cancelar
                                                    </a>
                                                    <input class="btn btn-secondary" name="opcion" type="submit" value="Enviar">
                                                    </input>
                                                    <br>
                                                        <br>
                                                        </br>
                                                    </br>
                                                </div>
                                            </form>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </section>
        <script src="../../js/jquery-3.3.1.min">
        </script>
        <script src="../../js/ajax_estados.js"/>
    </body>
</html>
<!---------------------------------------------->
<!-- Footer -->
<center>
    <div id="contacto">
        <h2>
            Contacto:
        </h2>
        <h3>
            Email: techsolutions.soft@gmail.com
        </h3>
    </div>
</center>
<footer class="footer text-center">
    <div class="container">
        <ul class="list-inline mb-5">
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-facebook">
                    </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white mr-3" href="#">
                    <i class="icon-social-twitter">
                    </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="social-link rounded-circle text-white" href="#">
                    <i class="icon-social-github">
                    </i>
                </a>
            </li>
        </ul>
        <p class="text-muted small mb-0">
            Copyright © Tech Solutions 2019
        </p>
    </div>
</footer>
<!----------------------------------------------------->
<a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up">
    </i>
</a>
<!-- Bootstrap core JavaScript -->
<script src="../../vendor/jquery/jquery.min.js">
</script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js">
</script>
<!-- Plugin JavaScript -->
<script src="../../vendor/jquery-easing/jquery.easing.min.js">
</script>
<!-- Custom scripts for this template -->
<script src="../../js/stylish-portfolio.min.js">
</script>

</script>
<script type="text/javascript">
    function soloNumeros(e){
        var key = window.Event ? e.which : e.keyCode
        return (key >= 48 && key <= 57)
    }
    function isConvenio(){
        var estadia=document.getElementById("estadia").checked;
        if(estadia===true){
            document.getElementById("isconvenio").style.display="block";
        }else{
            document.getElementById("isconvenio").style.display="none";
        }
    }
    function validarPassword(){
        var pass= document.getElementById("pass").value;
        var confirm=document.getElementById("confirm").value;
        if(pass!==confirm){
            document.getElementById('msgError').innerHTML='Las contraseña no coinciden';
        }else{
          document.getElementById("msgError").style.display="none";
        }
    }


</script>
