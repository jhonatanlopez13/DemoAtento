<?php
require_once "../../model/conexion.php";
require_once "../../model/consulta.php";
require_once "../../controller/admin/cargarUsuario.php";
require_once "../../controller/admin/verPerfil.php";
require_once "../../model/seguridad.php";

?>
<!doctype html>
<html class="no-js" lang="es">

    <head>
<<<<<<< HEAD
       
    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ATENTO COLOMBIA</title>
=======
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SILTO</title>
>>>>>>> cccbab4d827f9f1a8d339fedf835449cf7d49eaf
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
            ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
            ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <!-- Bootstrap CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <!-- owl.carousel CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/owl.carousel.css">
        <link rel="stylesheet" href="../../css/owl.theme.css">
        <link rel="stylesheet" href="../../css/owl.transitions.css">
        <!-- animate CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/animate.css">
        <!-- normalize CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/normalize.css">
        <!-- meanmenu icon CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/meanmenu.min.css">
        <!-- main CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/main.css">
        <!-- morrisjs CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/morrisjs/morris.css">
        <!-- mCustomScrollbar CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/scrollbar/jquery.mCustomScrollbar.min.css">
        <!-- metisMenu CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/metisMenu/metisMenu.min.css">
        <link rel="stylesheet" href="../../css/metisMenu/metisMenu-vertical.css">
        <!-- calendar CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/calendar/fullcalendar.min.css">
        <link rel="stylesheet" href="../../css/calendar/fullcalendar.print.min.css">
        <!-- style CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/style.css">
<<<<<<< HEAD
        <link rel="stylesheet" href="../../css/style2.css">
=======
>>>>>>> cccbab4d827f9f1a8d339fedf835449cf7d49eaf
        <!-- responsive CSS
            ============================================ -->
        <link rel="stylesheet" href="../../css/responsive.css">
        <!-- modernizr JS
            ============================================ -->
        <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        
<<<<<<< HEAD
        
<?php include ('../../includes/menulateralsuper.php') ?>


        <div class="header-advance-area">
            <nav class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="header-top-wraper">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                                <div class="menu-switcher-pro">
                                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn"><i class="fa fa-bars"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                                <div class="header-top-menu tabl-d-n">
                                                    <ul class="nav navbar-nav mai-top-nav">
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <div class="header-right-info">
                                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                     
                                                        <li class="nav-item">
                                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                    <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                                    <span class="admin-name">Advanda Cro</span>
                                                                    <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                                </a>
                                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                                <li><a href="register.html"><span class="fa fa-home author-log-ic"></span>Register</a>
                                                                </li>
                                                                <li>
                                                                <div class="perfil">
                                                                <!-- <
                                                                <div class="imagen">
                                                                    <img class="" src="../'.$farray['foto'].'" alt="foto">
                                                                </>
                                                                <div class="info">
                                                                    <a href="">'.$farray['nombre'].'</a>
                                                                </div>
                                                                </div> -->
                                                                    <?php 
                                                                    perfil();
                                                                    ?>
                                                                </div>
                                                                </li>
                                                                <li><a href="lock.html"><span class="fa fa-diamond author-log-ic"></span> Lock</a>
                                                                </li>
                                                                <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                                </li>
                                                                <li><a href="../../controller/admin/cerrarSesion.php"><span class="fa fa-lock author-log-ic"></span>CERRAR SESION</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                          
                        
                                        </div>              
                                    </div>
                            </div>  
                    </div>  
                </div>              
            </nav>
                            <!-- Mobile Menu start Menu dispositivo movil-->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="mobile-menu">
                                                <nav id="dropdown">
                                                    <ul class="mobile-menu-nav">
                                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                            <ul class="collapse dropdown-header-top">
                                                                <li><a href="registrar-usuario-admin.php">Registrar</a></li>
                                                                <li><a href="ver-usuarios-admin.php">Ver</a></li>
                                                                <!-- <li><a href="editar-usuario-admin.php">Editar</a></li> -->
                                                            </ul>
                                                        </li>
                                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                                <li><a href="login.html">Login</a>
                                                                </li>
                                                                <li><a href="register.html">Register</a>
                                                                </li>
                                                                <li><a href="lock.html">Lock</a>
                                                                </li>
                                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu end -->
                            <div class="breadcome-area">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="breadcome-list single-page-breadcome">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="breadcome-heading">
                                                            <form role="search" class="">
                                                                <!-- <input type="text" placeholder="Search..." class="form-control">
                                                                <a href=""><i class="fa fa-search"></i></a> -->
                                                                <br><br>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <ul class="breadcome-menu">
                                                            <!-- <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                                            </li>
                                                            <li><span class="bread-blod">Editar Usuario</span>
                                                            </li> -->
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </head>
    <body>
        
        <?php include('../../includes/menulateralsuper.php') ?>
=======
        <?php include('../../includes/menulateralsupercliente.php') ?>
>>>>>>> cccbab4d827f9f1a8d339fedf835449cf7d49eaf
        
        <div class="header-advance-area">
            <nav class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="header-top-wraper">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                                <div class="menu-switcher-pro">
                                                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn"><i class="fa fa-bars"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                                <div class="header-top-menu tabl-d-n">
                                                    <ul class="nav navbar-nav mai-top-nav">
                                                        <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                        </li>
                                                        <li class="nav-item"><a href="#" class="nav-link">About</a>
                                                        </li>
                                                        <li class="nav-item"><a href="#" class="nav-link">Services</a>
                                                        </li>
                                                        <li class="nav-item"><a href="#" class="nav-link">Support</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                                <div class="header-right-info">
                                                    <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                        <li class="nav-item dropdown">
                                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-envelope-o adminpro-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
                                                            <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                                <div class="message-single-top">
                                                                    <h1>Message</h1>
                                                                </div>
                                                                <ul class="message-menu">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="message-img">
                                                                                <img src="img/contact/1.jpg" alt="">
                                                                            </div>
                                                                            <div class="message-content">
                                                                                <span class="message-date">16 Sept</span>
                                                                                <h2>Advanda Cro</h2>
                                                                                <p>Please done this project as soon possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="message-img">
                                                                                <img src="img/contact/4.jpg" alt="">
                                                                            </div>
                                                                            <div class="message-content">
                                                                                <span class="message-date">16 Sept</span>
                                                                                <h2>Sulaiman din</h2>
                                                                                <p>Please done this project as soon possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="message-img">
                                                                                <img src="img/contact/3.jpg" alt="">
                                                                            </div>
                                                                            <div class="message-content">
                                                                                <span class="message-date">16 Sept</span>
                                                                                <h2>Victor Jara</h2>
                                                                                <p>Please done this project as soon possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="message-img">
                                                                                <img src="img/contact/2.jpg" alt="">
                                                                            </div>
                                                                            <div class="message-content">
                                                                                <span class="message-date">16 Sept</span>
                                                                                <h2>Victor Jara</h2>
                                                                                <p>Please done this project as soon possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <div class="message-view">
                                                                    <a href="#">View All Messages</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                            <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                                <div class="notification-single-top">
                                                                    <h1>Notifications</h1>
                                                                </div>
                                                                <ul class="notification-menu">
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notification-icon">
                                                                                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date">16 Sept</span>
                                                                                <h2>Advanda Cro</h2>
                                                                                <p>Please done this project as soon possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notification-icon">
                                                                                <i class="fa fa-cloud adminpro-cloud-computing-down" aria-hidden="true"></i>
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date">16 Sept</span>
                                                                                <h2>Sulaiman din</h2>
                                                                                <p>Please done this project as soon possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notification-icon">
                                                                                <i class="fa fa-eraser adminpro-shield" aria-hidden="true"></i>
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date">16 Sept</span>
                                                                                <h2>Victor Jara</h2>
                                                                                <p>Please done this project as soon possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <div class="notification-icon">
                                                                                <i class="fa fa-line-chart adminpro-analytics-arrow" aria-hidden="true"></i>
                                                                            </div>
                                                                            <div class="notification-content">
                                                                                <span class="notification-date">16 Sept</span>
                                                                                <h2>Victor Jara</h2>
                                                                                <p>Please done this project as soon possible.</p>
                                                                            </div>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <div class="notification-view">
                                                                    <a href="#">View All Notification</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                                    <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                                    <span class="admin-name">Advanda Cro</span>
                                                                    <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                                                </a>
                                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                                <li><a href="register.html"><span class="fa fa-home author-log-ic"></span>Register</a>
                                                                </li>
                                                                <li>
                                                                <div class="perfil">
                                                                <!-- <
                                                                <div class="imagen">
                                                                    <img class="" src="../'.$farray['foto'].'" alt="foto">
                                                                </>
                                                                <div class="info">
                                                                    <a href="">'.$farray['nombre'].'</a>
                                                                </div>
                                                                </div> -->
                                                                    <?php 
                                                                    perfil();
                                                                    ?>
                                                                </div>
                                                                </li>
                                                                <li><a href="lock.html"><span class="fa fa-diamond author-log-ic"></span> Lock</a>
                                                                </li>
                                                                <li><a href="#"><span class="fa fa-cog author-log-ic"></span>Settings</a>
                                                                </li>
                                                                <li><a href="../../controller/admin/cerrarSesion.php"><span class="fa fa-lock author-log-ic"></span>CERRAR SESION</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa fa-tasks"></i></a>

                                                            <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                                <ul class="nav nav-tabs custon-set-tab">
                                                                    <li class="active"><a data-toggle="tab" href="#Notes">News</a>
                                                                    </li>
                                                                    <li><a data-toggle="tab" href="#Projects">Activity</a>
                                                                    </li>
                                                                    <li><a data-toggle="tab" href="#Settings">Settings</a>
                                                                    </li>
                                                                </ul>

                                                                <div class="tab-content custom-bdr-nt">
                                                                    <div id="Notes" class="tab-pane fade in active">
                                                                        <div class="notes-area-wrap">
                                                                            <div class="note-heading-indicate">
                                                                                <h2><i class="fa fa-comments-o"></i> Latest News</h2>
                                                                                <p>You have 10 New News.</p>
                                                                            </div>
                                                                            <div class="notes-list-area notes-menu-scrollbar">
                                                                                <ul class="notes-menu-list">
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/4.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/1.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/2.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/3.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/4.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/1.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/2.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/1.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/2.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="notes-list-flow">
                                                                                                <div class="notes-img">
                                                                                                    <img src="img/contact/3.jpg" alt="" />
                                                                                                </div>
                                                                                                <div class="notes-content">
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                                                                                    <span>Yesterday 2:45 pm</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="Projects" class="tab-pane fade">
                                                                        <div class="projects-settings-wrap">
                                                                            <div class="note-heading-indicate">
                                                                                <h2><i class="fa fa-cube"></i> Recent Activity</h2>
                                                                                <p> You have 20 Recent Activity.</p>
                                                                            </div>
                                                                            <div class="project-st-list-area project-st-menu-scrollbar">
                                                                                <ul class="projects-st-menu-list">
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New User Registered</h2>
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                    <span class="project-st-time">1 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order Received</h2>
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                    <span class="project-st-time">2 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order Received</h2>
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                    <span class="project-st-time">3 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order Received</h2>
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                    <span class="project-st-time">4 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New User Registered</h2>
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                    <span class="project-st-time">5 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order</h2>
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                    <span class="project-st-time">6 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New User</h2>
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                    <span class="project-st-time">7 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="#">
                                                                                            <div class="project-list-flow">
                                                                                                <div class="projects-st-heading">
                                                                                                    <h2>New Order</h2>
                                                                                                    <p> The point of using Lorem Ipsum is that it has a more or less normal.</p>
                                                                                                    <span class="project-st-time">9 hours ago</span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div id="Settings" class="tab-pane fade">
                                                                        <div class="setting-panel-area">
                                                                            <div class="note-heading-indicate">
                                                                                <h2><i class="fa fa-gears"></i> Settings Panel</h2>
                                                                                <p> You have 20 Settings. 5 not completed.</p>
                                                                            </div>
                                                                            <ul class="setting-panel-list">
                                                                                <li>
                                                                                    <div class="checkbox-setting-pro">
                                                                                        <div class="checkbox-title-pro">
                                                                                            <h2>Show notifications</h2>
                                                                                            <div class="ts-custom-check">
                                                                                                <div class="onoffswitch">
                                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example">
                                                                                                    <label class="onoffswitch-label" for="example">
                                                                                                            <span class="onoffswitch-inner"></span>
                                                                                                            <span class="onoffswitch-switch"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="checkbox-setting-pro">
                                                                                        <div class="checkbox-title-pro">
                                                                                            <h2>Disable Chat</h2>
                                                                                            <div class="ts-custom-check">
                                                                                                <div class="onoffswitch">
                                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example3">
                                                                                                    <label class="onoffswitch-label" for="example3">
                                                                                                            <span class="onoffswitch-inner"></span>
                                                                                                            <span class="onoffswitch-switch"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="checkbox-setting-pro">
                                                                                        <div class="checkbox-title-pro">
                                                                                            <h2>Enable history</h2>
                                                                                            <div class="ts-custom-check">
                                                                                                <div class="onoffswitch">
                                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example4">
                                                                                                    <label class="onoffswitch-label" for="example4">
                                                                                                            <span class="onoffswitch-inner"></span>
                                                                                                            <span class="onoffswitch-switch"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="checkbox-setting-pro">
                                                                                        <div class="checkbox-title-pro">
                                                                                            <h2>Show charts</h2>
                                                                                            <div class="ts-custom-check">
                                                                                                <div class="onoffswitch">
                                                                                                    <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example7">
                                                                                                    <label class="onoffswitch-label" for="example7">
                                                                                                            <span class="onoffswitch-inner"></span>
                                                                                                            <span class="onoffswitch-switch"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="checkbox-setting-pro">
                                                                                        <div class="checkbox-title-pro">
                                                                                            <h2>Update everyday</h2>
                                                                                            <div class="ts-custom-check">
                                                                                                <div class="onoffswitch">
                                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example2">
                                                                                                    <label class="onoffswitch-label" for="example2">
                                                                                                            <span class="onoffswitch-inner"></span>
                                                                                                            <span class="onoffswitch-switch"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="checkbox-setting-pro">
                                                                                        <div class="checkbox-title-pro">
                                                                                            <h2>Global search</h2>
                                                                                            <div class="ts-custom-check">
                                                                                                <div class="onoffswitch">
                                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example6">
                                                                                                    <label class="onoffswitch-label" for="example6">
                                                                                                            <span class="onoffswitch-inner"></span>
                                                                                                            <span class="onoffswitch-switch"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="checkbox-setting-pro">
                                                                                        <div class="checkbox-title-pro">
                                                                                            <h2>Offline users</h2>
                                                                                            <div class="ts-custom-check">
                                                                                                <div class="onoffswitch">
                                                                                                    <input type="checkbox" name="collapsemenu" checked="" class="onoffswitch-checkbox" id="example5">
                                                                                                    <label class="onoffswitch-label" for="example5">
                                                                                                            <span class="onoffswitch-inner"></span>
                                                                                                            <span class="onoffswitch-switch"></span>
                                                                                                        </label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <div class="info">
                                                <a href="../../controller/cerrarSesion.php">CERRAR SESION</a>
                                            </div> -->
                        
                                        </div>              
                                    </div>
                            </div>  
                    </div>  
                </div>              
            </nav>
                            <!-- Mobile Menu start Menu dispositivo movil-->
                            <div class="mobile-menu-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="mobile-menu">
                                                <nav id="dropdown">
                                                    <ul class="mobile-menu-nav">
                                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                            <ul class="collapse dropdown-header-top">
                                                                <li><a href="registrar-usuario-admin.php">Registrar</a></li>
                                                                <li><a href="ver-usuarios-admin.php">Ver</a></li>
                                                                <!-- <li><a href="editar-usuario-admin.php">Editar</a></li> -->
                                                            </ul>
                                                        </li>
                                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                                <li><a href="login.html">Login</a>
                                                                </li>
                                                                <li><a href="register.html">Register</a>
                                                                </li>
                                                                <li><a href="lock.html">Lock</a>
                                                                </li>
                                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu end -->
                            <div class="breadcome-area">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="breadcome-list single-page-breadcome">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="breadcome-heading">
                                                            <form role="search" class="">
                                                                <input type="text" placeholder="Search..." class="form-control">
                                                                <a href=""><i class="fa fa-search"></i></a>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <ul class="breadcome-menu">
                                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                                            </li>
                                                            <li><span class="bread-blod">Editar Usuario</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Formulario de Editar -->
<div class="container-fluid-registro">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="text-center custom-login">
                        <h3 class="editar-usuario">EDITAR USUARIO</h3>
                        <p>Todos los campos son obligatorios</p>
                    </div>
                    <div class="hpanel">
                        <div class="panel-body">
                            <?php
                            cargarUsuarioEditar();
                            ?>
                            <!-- <form action="#" id="loginForm">
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Identificacion</label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Cargo</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success loginbtn">ACTUALIZAR</button>
                                    <button class="btn btn-default">Cancel</button>
                                </div>
                            </form> -->
                            
                        </div>
                    </div>
                    
                </div>

            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        </div>       
    </div>
</div>
                
<?php
require_once "../footer.php";
?>