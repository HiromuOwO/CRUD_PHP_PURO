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
    <h1 class="text-center p-3">Hola mundo</h1>
    <div class="cpntainer-fluid row">
        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-success">Registro de libros</h3>
            <?php
                    include "modelo/conexion.php";
                    include "controlador/registro_libro.php";
                        ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Titulo del libro</label>
                <input type="text" class="form-control"  name="titulo">

                <label for="exampleInputEmail1" class="form-label">Autor</label>
                <input type="tex" class="form-control"  name="autor">

                <label for="exampleInputEmail1" class="form-label">Editoial</label>
                <input type="tex" class="form-control"  name="editorial">

                <label for="exampleInputEmail1" class="form-label">Año</label>
                <input type="number"  class="form-control" name="año">

                <label for="exampleInputEmail1" class="form-label">Numero de paginas</label>
                <input type="number" class="form-control"  name="numPaginas">

                <label for="exampleInputEmail1" class="form-label">Edicion</label>
                <input type="text"  class="form-control" name="edicion">

                <label for="exampleInputEmail1" class="form-label">Genero</label>
                <input type="text" class="form-control"  name="genero">


            </div>

            <button type="submit" class="btn btn-primary" name="botonRegistrar" value=ok>Registrar</button>
        </form>

        <div class="col 8 p-4">

            <table class="table table-dark table-striped-column">
                <thead>
                    <tr>
                        <th scope="col">IDLIBRO</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Editorial</th>
                        <th scope="col">Año</th>
                        <th scope="col">No.Pag.</th>
                        <th scope="col">Edicion</th>
                        <th scope="col">Genero</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("select * from libro");
                    while ($datos = $sql->fetch_object()) {
                        ?>
                        <tr>

                            <td><?= $datos->IDLIBRO ?></td>
                            <td><?= $datos->titulo?></td>
                            <td><?= $datos->autor ?></td>
                            <td><?= $datos->editorial?></td>
                            <td><?= $datos->año ?></td>
                            <td><?= $datos->numPaginas?>p</td>
                            <td><?= $datos->edicion?></td>
                            <td><?= $datos->genero?></td>
                            <td>
                                <a href="modificar_libro.php?ID=<?=$datos->IDLIBRO?>" class="btn btn-small btn-warning"><i class="fa-solid fa-file-pen"></i></a>
                                <a href="" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    <?php }

                    ?>



                </tbody>
            </table>


        </div>
    </div>
</body>

</html>