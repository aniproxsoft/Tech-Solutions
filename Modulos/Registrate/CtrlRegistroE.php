<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <title>
                            Registrado
                        </title-->
                        <!-- Bootstrap Core CSS -->
                        <!--link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                            <!-- Custom Fonts -->
                            <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
                                <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
                                    <link href="../../vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
                                        <!-- Custom CSS -->
                                        <link href="../../css/stylish-portfolio.min.css" rel="stylesheet">
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </link>
                    </meta>
                </meta>
            </meta>
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
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="../../index.html">
                        Inicio
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="../Registrate/formUserRegistrarse.html">
                        ¿Solicitas empleados? Registrate
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#services">
                        Services
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="modulos/Login/iniciar_sesion.html">
                       Iniciar sesión
                    </a>
                </li>
                <!--li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#contact">
                        Contact
                    </a>
                </li-->
            <!--/ul>
        </nav>
        </section>
        <!-- Callout -->
        <section class="callout">
            <div class="container text-center">
                <h2 class="mx-auto mb-5">
                    Gracias por registrarse.
                    <em>
                    </em>
                    ¡Bienvenido!
                </h2>
                <a class="btn btn-primary btn-xl" href="../Registrate/formUserRegistrarse.html">
                    Publicar vacante
                </a>
            </div>
            <!--------------------------------------------------------------------------------------------------------------------------->
            <!--form action="registroEm.php" id="registro" method="post">
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
                                <a href="CtrlRegistroE.php" id="btnAgregarE" class="btn btn-warning" value="aceptar" >
                                    Aceptar
                                </a>
                                <br>
                                <br>
                        </div>
                    </div>
                </div>
                <div-->

            <!---------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------------------------------------------------------------------------->
<!--table id="agregarUs" class="table table-sm table-inverse table-bordered">
    <tr style="font-weight: bold" >
      <td>Usuario</td>
      <td>Apellidos</td>
      <td>Email</td>
      <td>Rol</td>
      <td>Estatus</td>
      <td style="text-align: center;">Editar</td>
      <td style="text-align: center;">Eliminar</td>
    </tr>
  <?php 
    $registros=mysqli_query($conexion, "SELECT nombre, apellidos, email, password, id_rol,   status from usuario") or 
        die("Error en el registro:".mysqli_error($conexion));
        if($resultado = mysqli_fetch_array($registros))
    while ($ver=mysqli_fetch_row($registros)):
   ?>
    <tr>
      <td><?php echo $ver[0]; ?></td>
      <td><?php echo $ver[1]; ?></td>
      <td><?php echo $ver[2]; ?></td>
      <td><?php echo $ver[3]; ?></td>
      <td><?php echo $ver[4]; ?></td>      
    </tr>
    <?php 
      endwhile;
     ?>
</table-->




        <!----------------------------------------------------------->







            
<!-------------------------------------------------------------------------------------------------------------------------------------->

        </section>
        <!-- Footer -->
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
                    Copyright © Your Website 2019
                </p>
            </div>
        </footer>
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
        <Custom scripts for this template -->
        <script src="../../js/stylish-portfolio.min.js">
        </script>
    </body>
    </html>



<!--------------------------------------------------------------------------------------------------------------------------------------->










