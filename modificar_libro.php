<?php
include "modelo/conexion.php";
$ID=$_GET["ID"];

$sql=$conexion->query("select * from libro where IDLIBRO=$ID");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/62178d318f.js" crossorigin="anonymous"></script>
    
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-success">Modificar libros</h3>
        <input type="hidden" name="id" value="<?=$_GET["ID"]?>">
        <?php
        include "controlador/modificar_libro.php";
            while($datos=$sql->fetch_object()){ ?>
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titulo del libro</label>
            <input type="text" class="form-control" name="titulo" value ="<?=$datos->titulo?>">

            <label for="exampleInputEmail1" class="form-label">Autor</label>
            <input type="tex" class="form-control" name="autor" value ="<?=$datos->autor?>">

            <label for="exampleInputEmail1" class="form-label">Editoial</label>
            <input type="tex" class="form-control" name="editorial" value ="<?=$datos->editorial?>">

            <label for="exampleInputEmail1" class="form-label">Año</label>
            <input type="number" class="form-control" name="año" value ="<?=$datos->año?>">

            <label for="exampleInputEmail1" class="form-label">Numero de paginas</label>
            <input type="number" class="form-control" name="numPaginas" value ="<?=$datos->numPaginas?>">

            <label for="exampleInputEmail1" class="form-label">Edicion</label>
            <input type="text" class="form-control" name="edicion" value ="<?=$datos->edicion?>">

            <label for="exampleInputEmail1" class="form-label">Genero</label>
            <input type="text" class="form-control" name="genero" value ="<?=$datos->genero?>">


        </div>

        <?php  }

        ?>
        

        <button type="submit" class="btn btn-primary" name="botonModificar" value=ok>Modificar</button>
    </form>



</body>

</html>