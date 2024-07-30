<?php

if(!empty($_POST["botonModificar"])){
   if(!empty($_POST["titulo"]) and !empty($_POST["autor"]) and !empty($_POST["editorial"]) and !empty($_POST["año"]) and !empty($_POST["numPaginas"]) and
   !empty($_POST["edicion"]) and !empty($_POST["genero"])){
    
    $ID=$_POST["id"];
    $titulo=$_POST["titulo"];
    $autor=$_POST["autor"];
    $editorial=$_POST["editorial"];
    $año=$_POST["año"];
    $numPaginas=$_POST["numPaginas"];
    $edicion=$_POST["edicion"];
    $genero=$_POST["genero"];

    $sql=$conexion->query("update libro set titulo='$titulo', autor='$autor',editorial='$editorial',año=$año,numPaginas=$numPaginas,edicion='$edicion',
    genero='$genero' where IDLIBRO=$ID");

    if($sql==1){
        header("location:index.php");

    }
    else{echo "<div class='alert alert-danger'>Error al modificar</div>";}
}

else{ echo "<div class='alert alert-warning'>Campos vacios</div>";}

}

?>