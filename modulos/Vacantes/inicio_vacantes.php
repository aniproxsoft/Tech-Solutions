<?php
include '../../php/DTO/UsuarioDTO.php';
session_start();
// error_reporting(0);
$sesion  = $_SESSION['usuario'];
$usuario = unserialize($sesion);
if (!isset($sesion)) {
    header("Location:../Login/iniciar_sesion.html");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <title>
                            Job Crusade
                        </title>
                        <!-- Bootstrap Core CSS -->
                        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
                            <link href="../../css/formularios.css" rel="stylesheet">
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
                        <a class="js-scroll-trigger" href="#page-top">
                            Job Crusade
                        </a>
                    </img>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#page-top">
                        Inicio
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="../Login/datos_empresa.php">
                        Mis Datos
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="registro_vacantes.html">
                        Agrega una vacante
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="../../php/cerrar_sesion.php">
                        Cerrar sesión
                    </a>
                </li>
                <li class="sidebar-nav-item">
                    <a class="js-scroll-trigger" href="#contacto">
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Header -->
        <header class="masthead d-flex">
            <div class="container text-center my-auto">
                <h1 class="mb-1">
                    Job Crusade
                </h1>
                <h3 class="mb-5">
                    <em>
                        Que encontrar empleo no te cueste sangre
                    </em>
                </h3>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="registro_vacantes.html">
                    Agregar vacante
                </a>
            </div>
            <div class="overlay">
            </div>
        </header>
        <!-- Services -->
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
    </body>
</html>
