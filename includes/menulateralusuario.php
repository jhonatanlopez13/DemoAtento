<?php
require_once "../../model/conexion.php";
require_once "../../model/validarSesion.php";
require_once "../../model/consulta.php";
require_once "../../controller/admin/verPerfil.php";
require_once "../../model/seguridad.php";
?>
<div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="index.html"><img width="100px" height="150px" class="main-logo" src="../../img/logo/logoatento.png" alt="" /></a>
                    <strong><img src="../../img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="index.php">
                                <i class="fa big-icon fa-home icon-wrap"></i>
                                <span class="mini-click-non">Administrador</span>
							</a>
                            <ul class="submenu-angle" aria-expanded="true">
                            <!-- //crud usuario -->
                                <li><a title="registro" href="editarUsuario.php"><i class="fa fa-edit" aria-hidden="true"></i> <span class="mini-sub-pro">Editar Usuario</span></a></li>
                                <li><a title="ver-usuarios" href="listaProductos.php"><i class="fa fa-eye nav-icon" aria-hidden="true"></i> <span class="mini-sub-pro">Lista Ofertas</span></a></li>
                            </ul>
                    </ul>
                </nav>
            </div>
            </nav>
        </div>