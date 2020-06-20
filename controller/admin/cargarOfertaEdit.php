<?php
    function cargarOfertaEditar(){
    
        if(isset($_GET['id_oferta'])){
            $consulta = new Consulta();
            $id_oferta = $_GET['id_oferta'];
            $result = $consulta->cargarOferta($id_oferta);
            foreach($result as $farray){
                echo '
                
                <form action="../../controller/admin/modificarOferta.php" id="loginForm" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="form-group col-lg-12">
                <label>Id oferta</label>
                <input type="text" name="id_oferta" value="'.$farray['id_oferta'].'" class="form-control" required readonly>
            </div>
                    <div class="form-group col-lg-12">
                        <label>Nombre</label>
                        <input type="text" name="nombre" value="'.$farray['nombre'].'" class="form-control" required>
                    </div> 
                </div>
                <div class="text-center">
                    <button class="btn btn-success loginbtn">Actualizar</button>
                    <button class="btn btn-default">Cancel</button>
                </div>
            </form>
                ';      
                
            }
           
            
        }
    }
    


?>