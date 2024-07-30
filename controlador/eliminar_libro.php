<?php

if(!empty($_GET["idBorrar"])){
    $ID=$_GET["idBorrar"];
    $sql=$conexion->query("delete from libro where IDLIBRO=$ID");

    if($sql==1){
        echo '<div class="alert alert-success">Libro eliminado correctamente</div>';

    }
    else{echo '<div class="alert alert-danger">Error al eliminar</div>';}
}
?>