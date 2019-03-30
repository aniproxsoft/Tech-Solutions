<?php
require_once "../../php/conexion/ClassConnection.php";
include "../../php/DTO/UsuarioDTO.php";
include "../../Modulos/Registrate/insertar.php";
$db       = new connectionDB();
$conexion = $db->get_connection();
$usuario = new UsuarioDTO();
?>

<!DOCTYPE html>
<html >
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
                    <a class="js-scroll-trigger" href="../Registrate/formUserRegistrarse.html">
                        ¿Solicitas empleados? Registrate
                    </a>
                </li>
                <!-- <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="modulos/Login/iniciar_sesion.html">
                        Iniciar sesión
                    </a>
                </li-->
            </ul>
        </nav>
        <form action="insertar.php" id="registroUs" method="post">
            <section class="content-section2 bg-primary text-white text-center" >
            <center>
            <div id="datos_usuario" >

                <div class="container">
                    <div class="content-section-heading">
                        <br>
                        <h1>Información</h1>
                        <br>
                        <center>
            <div id="datos_empresa" >

                <div class="container">
                    <div class="content-section-heading">

                        <br>
                        <h1>Datos usuario</h1>
                        <br>
                        <center>
                            <div id="formulario2" >
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend" >
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                           Nombre
                                        </span>
                                    </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control" required="true" type="text"   value="" name="nombre_u">
                                    </input>
                                    <div class="input-group-prepend" style="margin-left: 20px">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                            Apellidos
                                        </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text"   value="" name="apellidos">
                                        </input>
                                        
                                    <div class="input-group-prepend" style="margin-left: 20px" >
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                 Correo Electrónico
                                            </span>
                                        </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="email"  value="" name="email">
                                    </input>
                                    <div class="input-group-prepend" style="margin-left: 20px" >
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                 Contraseña
                                            </span>
                                        </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="password"   value="" name="pass">
                                    </input>
                                    </div>
                                    </div>



                                </div>

                                <hr>
                                <!--h1>Datos empresa</h1-->
                                <br>
                                 <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend" >
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                           Confirmar contraseña
                                        </span>
                                    </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="password"  value="" name="cpass">
                                    </input>
                                    <div class="input-group-prepend" style="margin-left: 20px">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                            Empresa
                                        </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text" value="" name="nombre_e">
                                        </input>
                                        <div class="input-group-prepend" style="margin-left: 20px" >
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                 Estado
                                            </span>
                                        </div>
                                    <select>
                                        <option  id="estado" value="0">Seleccione:</option>
                                          <?php
                                          $registros = mysqli_query ($conexion,"SELECT id_estado, nombre_estado FROM estado")
                                            or die(mysql_error($conexion));
                                            //mysqli_close();
                                            while ($reg = mysqli_fetch_array($registros)) {
                                              echo '<option value="'.$reg['id_estado'].'">'.$reg["nombre_estado"].'</option>';
                                            }
                                          ?>
                                    </select>
                                    </input>
                                </div>
                                <br>
                                    <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend" >
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                           Dirección
                                        </span>
                                    </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text"  value="" name="dirección">
                                    </input>

                                         <div class="input-group-prepend" style="margin-left: 20px" >
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                 Ciudad
                                            </span>
                                        </div>
                                    <select>
                                        <option id="ciudad" value="0">Seleccione:</option>
                                          <?php
                                          $registros = mysqli_query ($conexion,"SELECT id_ciudad, nombre_ciudad FROM ciudad")
                                            or die(mysql_error($conexion));
                                            while($reg=mysqli_fetch_array($registros)){
                                            echo '<option value="'.$reg['id_ciudad'].'">'.$reg["nombre_ciudad"].'</option>';
                                            }
                                          ?>
                                    </select>
                                    <div class="input-group-prepend" style="margin-left: 20px">
                                         <span class="input-group-text" id="inputGroup-sizing-sm">
                                            Número de teléfono
                                         </span>
                                    </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="number" value="">
                                    </input>
                                    </div>
                                    <br>



                                <div class="input-group input-group-sm mb-3" style="width: 70%">
                                    <div class="input-group-prepend" style="margin-left: 20px">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                            Convenio UTN
                                        </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text"  value="" name="convenio">
                                        </input>

                                    <div class="input-group-prepend" style="margin-left: 20px">
                                         
                                    </div>
                                        

                                        <div class="input-group-prepend" style="margin-left: 20px">
                                         <span class="input-group-text" id="inputGroup-sizing-sm">
                                                RFC
                                         </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text" value="" name="convenio">
                                        </input>
                                </div>
                            
                                </div>

                            </div>
                            </div> 
                        </center>
                        <div class="col-12">
                                <input class="btn btn-dark" type="reset" id="borrar" value="limpiar"/>
                                <button class="btn btn-danger" href="../Modulos/Registrate/formUserRegistrarse.html" value="cancelar">
                                    Cancelar
                                </button>
                                <a href="CtrlRegistroE.php" id="btnAgregarE" class="btn btn-warning" value="aceptar" >
                                    Aceptar
                                </a>
                                <br>
                                <br>
                        </div>
                    </div>
                </div>

            </div>
        </center>
        </section>
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
            
    <!--script type="text/javascript">
    $(document).ready(function(){
        $('#agregarU').load('../../Modulos/Registrate/CtrlRegistroE.php');

    $('#btnAgregarU').click(function(){
      if(validarFormVacio('registroUs') > 0){
        alertify.alert("Debes llenar todos los campos por favor!");
        return false;
      }

      datos=$('#registroUs').serialize();

      $.ajax({
        type:"POST",
        data:datos,
        url:"../../Modulos/Registrate/CtrlInsertar.php",
        success:function(r){
          if(r==1){
           $('#registroUs')[0].reset();
           $('#agregarU').load('CtrlRegistroE.php');
           alertify.success("Agregado con exito :)");
         }else{
          alertify.error("No se pudo agregar :(");
        }
      }
    });
    });


  });
</script-->



      <!---->
      <!-- Scroll to Top Button-->
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
