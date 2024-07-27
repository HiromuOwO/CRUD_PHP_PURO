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
        <form class="col-4 p-3">
            <h3 class="text-center text-success">Registro de personas</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre de la persona</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">

                <label for="exampleInputEmail1" class="form-label">Apellidos</label>
                <input type="tex" class="form-control" id="exampleInputEmail1" name="apellidos">

                <label for="exampleInputEmail1" class="form-label">DNI</label>
                <input type="tex" class="form-control" id="exampleInputEmail1" name="dni">

                <label for="exampleInputEmail1" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="fechaNacimiento">

                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="correo">

            </div>

            <button type="submit" class="btn btn-primary" value=ok>Registrar</button>
        </form>

        <div class="col 8 p-4">

            <table class="table table-dark table-striped-column">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha de naciemiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql = $conexion->query("select * from persona");
                    while ($datos = $sql->fetch_object()) {
                        ?>
                        <tr>

                            <td><?php= $datos->id_persona ?></td>
                            <td><?php= $datos->nombre?></td>
                            <td><?php=$datos->Apellidos ?></td>
                            <td><?php=$datos->DNI ?></td>
                            <td><?php=$datos->fechaNacimiento?></td>
                            <td><?php=$datos->coreo?></td>
                            <td>
                                <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-file-pen"></i></a>
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