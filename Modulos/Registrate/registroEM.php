<?php
require_once "../../php/conexion/ClassConnection.php";
//include "../../Modulos/Registrate/CtrlRegistroE.php";

$db       = new connectionDB();
$conexion = $db->get_connection();

?>

<!DOCTYPE html>
<html lang="en">
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
        <form action="registroE.php" id="registro" method="post">
            <section class="content-section2 bg-primary text-white text-center">
            <center>
            <div id="datos_empresa" >

                <div class="container">
                    <div class="content-section-heading">

                        <br>
                        <h1>Registrar datos usuario</h1>
                        <br>
                        <center>
                            <div id="formulario2" >
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend" >
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                           Nombre
                                        </span>
                                    </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control" required="true" type="text" id="nombre" >
                                    </input>
                                    <div class="input-group-prepend" style="margin-left: 20px">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                            Apellidos
                                        </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text"  id="apellidos">
                                        </input>
                                        <div class="input-group-prepend" style="margin-left: 20px" >
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                 Rol
                                            </span>
                                        </div>
                                    <select>
                                        <option id="nombre_rol" value="0">Seleccione:</option>
                                          <?php
                                          $registros = mysqli_query ($conexion,"SELECT id_rol, rol_nombre FROM usuario_rol where id_rol=1")
                                            or die(mysql_error($conexion));
                                            //mysqli_close();
                                            while ($reg = mysqli_fetch_array($registros)) {
                                              echo '<option value="'.$reg['id_rol'].'">'.$reg["rol_nombre"].'</option>';
                                            }
                                          ?>
                                    </select>
                                    <div class="input-group-prepend" style="margin-left: 20px" >
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                 Correo Electrónico
                                            </span>
                                        </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="email"   id="email" >
                                    </input>
                                    </div>
                                    </div>
                                </div>
                                <div>





                                <hr>
                                <h1>Registrar datos empresa</h1>
                                <br>
                                 <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend" >
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                           Empresa
                                        </span>
                                    </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text"   id="nombreE" >
                                    </input>
                                    <div class="input-group-prepend" style="margin-left: 20px">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                            Dirección
                                        </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="text" id="direccion">
                                        </input>
                                        <div class="input-group-prepend" style="margin-left: 20px" >
                                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                                 Estado
                                            </span>
                                        </div>
                                    <select>
                                        <option id="estado" value="0">Seleccione:</option>
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
                                           Codigo postal
                                        </span>
                                    </div>
                                    <input id="cp" aria-describedby="input" aria-label="small" class="form-control"  required="true" type="number"  value="" >
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
                                    </input>
                                    <div class="input-group-prepend" style="margin-left: 20px">
                                         <span class="input-group-text" id="inputGroup-sizing-sm">
                                            Estatus
                                         </span>
                                    </div>
                                    <input aria-describedby="input" aria-label="small" class="form-control" readonly="true" type="text" value="3" id="status">
                                    </input>
                                    </div>
                                    <br>



                                <div class="input-group input-group-sm mb-3" style="width: 70%">
                                    <div class="input-group-prepend" style="margin-left: 20px">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                            Número de telefono
                                        </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control"  required="true" type="number" id="telefono" value="">
                                        </input>

                                    <div class="input-group-prepend" style="margin-left: 20px">
                                         <span class="input-group-text" id="inputGroup-sizing-sm">
                                                RFC
                                         </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control" required="true" type="text" id="rfc">
                                        </input>                                        

                                        <div class="input-group-prepend" style="margin-left: 20px">
                                         <span class="input-group-text" id="inputGroup-sizing-sm">
                                                Convenio UTN
                                         </span>
                                    </div>
                                        <input aria-describedby="input" aria-label="small" class="form-control" readonly="true" required="true" type="text" id="convenio">
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
                                <button class="btn btn-warning" value="aceptar" >
                                    Aceptar
                                </button>
                                <br>
                                <br>
                        </div>
                    </div>
                </div>
                <div>
                    <!--Mostrar resultado insert-->
                    <?php
                     $registros=mysql_query($conexion, "SELECT e.nombre, e.rfc from estado ed, cuidad c,empresa e, usuario u  where ed.id_estado=c.id_estado and c.id_ciudad=e.id_ciudad and e.id_usuario=u.id_usuario") or 
                        die("Error en el registro:".mysqli_error($conexion));
                        echo '<option value="'.$reg['nombre'].'">'.$reg["rfc"].'</option>';
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
                        or die("Problemas con query:".mysqli_error($conexion));
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
                        or die("Problemas con query:".mysqli_error($conexion));
                       // header("location: ../Modulos/Registrate/CtrlRegistroE.php");

                        }
                        else{
                         //    echo "Error en el registro"; 
                        }
                ?>
  
                </div>


            </div>
        </center>
        </section>
            <!--section class="content-section2 bg-primary text-white text-center" id="tabla_empleos">
                <div class="container">
                    <div class="content-section-heading">
                        <h2 class="text-secondary mb-0">
                            Registrar Empresa
                        </h2>
                        <center>
                    <div class="input-group input-group-sm mb-3">
                      <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                Nombre de la empresa
                            </span>
                      </div>
                        <input aria-describedby="input" aria-label="large" class="form-control" type="text" id="nombreE" required="true"/>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                Dirección
                            </span>
                        </div>
                        <input aria-describedby="input" aria-label="small" class="form-control" type="text" id="direccion" required="true"/>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                Estado
                            </span>
                        </div>
                          <select>
                            <option value="0">Seleccione:</option>
                              <?php
                              $registros = mysqli_query ($conexion,"SELECT id_estado, nombre_estado FROM estado")
                                or die(mysql_error($conexion));
                                //mysqli_close();
                                while ($reg = mysqli_fetch_array($registros)) {
                                  echo '<option value="'.$reg['id_estado'].'">'.$reg["nombre_estado"].'</option>';
                                }
                              ?>
                            </select>
                        <input aria-describedby="input" aria-label="small" class="form-control" type="text" id="estado" required="true" value=""/>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                Ciudad
                            </span>
                        </div>
                        <select>
                            <option value="0">Seleccione:</option>
                              <?php
                              $registros = mysqli_query ($conexion,"SELECT id_ciudad, nombre_ciudad FROM ciudad")
								or die(mysql_error($conexion));
                                while($reg=mysqli_fetch_array($registros)){
                                echo '<option value="'.$reg['id_ciudad'].'">'.$reg["nombre_ciudad"].'</option>';
                                }
                              ?>
                            </select>
                        <put aria-describedby="input" aria-label="small" class="form-control" type="text" id="ciudad" required="true" value=""/>
              </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                Código Postal
                            </span>
                        </div>
                        <input aria-describedby="input" aria-label="small" class="form-control" type="text" id="codigo_postal" required="true"/>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                Teléfono
                            </span>
                        </div>
                        <input aria-describedby="input" aria-label="small" class="form-control" type="tel" id="telefono" required="true"/>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                RFC
                            </span>
                        </div>
                        <input aria-describedby="input" aria-label="small" class="form-control" type="text" id="rfc" required="true"/>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                Nombre del contacto con la empresa
                            </span>
                        </div>
                        <input aria-describedby="input" aria-label="small" class="form-control" type="text" id="contactoE" required="true"/>
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">
                                Contraseña
                            </span>
                        </div>
                        <input aria-describedby="input" aria-label="small" class="form-control" type="password" id="contrasena" required="true"/>
                    </div>
                    <br>
                        <br>
                            <div class="col-12">
                                <input class="btn btn-dark" type="reset" id="borrar" value="limpiar"/>
                                <button class="btn btn-danger" href="../Modulos/Registrate/formUserRegistrarse.html" value="cancelar">
                                    Cancelar
                                </button>
                                <button class="btn btn-warning" value="aceptar" >
                                    Aceptar
                                </button>
                                <br>
                                <br>
                            </div>
                        <br>
                    <br>
                </form>
                            </div>
                        </center>
                    </div>
                </div-->
            </section>
    </body>
</html>

<!-- Footer -->
<!--    <center>
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
        </footer> -->

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
