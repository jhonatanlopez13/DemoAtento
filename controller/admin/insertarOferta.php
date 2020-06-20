<?php

require_once('../../model/conexion.php');
require_once('../../model/consulta.php');



//$id_oferta  = $_POST['id_oferta'];
$nombre       = $_POST['nombre'];



//strlen($id_oferta) > 0 && 
if(strlen($nombre) > 0 ){
    
    $consulta = new Consulta();
    $result = $consulta->insertOfertas($nombre);
        
    }else{
        echo  "<script>alert('Complete todos los campos')</script>";
        echo '<script>location.href="../../views/admin/registrarOferta.php"</script>';
    }


?>