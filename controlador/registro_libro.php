<?php
    if (!empty($_POST["botonRegistrar"])){
        if(!empty($_POST["titulo"]) and !empty($_POST["autor"]) and !empty($_POST["editorial"]) and !empty($_POST["año"])
         and !empty($_POST["numPaginas"]) and !empty($_POST["edicion"]) and !empty($_POST["genero"])){
        
            $titulo = $_POST["titulo"];
            $autor = $_POST["autor"];
            $editorial = $_POST["editorial"];
            $año = $_POST["año"];
            $numPaginas = $_POST["numPaginas"];
            $edicion = $_POST["edicion"];
            $genero = $_POST["genero"];

            $sql=$conexion->query("insert into libro(titulo,autor,editorial,año,numPaginas,edicion,genero)
            values('$titulo','$autor','$editorial',$año,$numPaginas,'$edicion','$genero')");

            if($sql==1){
                echo '<div class=alert alert-success>Libro regitrado corectamente</div>';
            }
            else {
                echo '<div class=alert alert-danger>Error al registrar</div>';
            }
        }
        else { echo '<div class=alert alert-warning>Alguno de los campos esta vacio</div>';
        }
}
?>
