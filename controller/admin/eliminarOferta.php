<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');


if(isset($_GET['id_ofertaE'])){
    $idEliminar = $_GET['id_ofertaE'];
    $consulta = new Consulta();
    $result = $consulta->eliminarOfertas($idEliminar);
}else{
    echo '<script>alert("error)</script>';
}



?>