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

        
        </div>
    </div>
</body>

</html>