<?php
//include DB connection
require_once "../../php/conexion/ClassConnection.php";
//require_once "../../php/DTO/UsuarioDTO.php";
include "../../php/DTO/EmpresaDTO.php";
include "../../Modulos/Registrate/MdlRegistro.php";
$db       = new connectionDB();
$conexion = $db->get_connection();
$empresa = new EmpresaDTO();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <meta content="" name="description">
                    <meta content="" name="author">
                        <title>
                            Registrado
                        </title>
                        <!-- Bootstrap Core CSS -->
                        <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
            </ul>
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
                <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/template-overviews/stylish-portfolio/">
                    Publicar vacante
                </a>
            </div>
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
        <!-- Custom scripts for this template -->
        <script src="../../js/stylish-portfolio.min.js">
        </script>
    </body>
    </html>













