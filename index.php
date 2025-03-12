<?php
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$servicio = $_POST['servicio'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de envio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <!-- Inicio del cuerpo del HTML -->

    <div class="container-md">
        <div class="row mb-3">
            <h1>Formulario de Envio</h1>
        </div>

        <form action="index.php" method="post">
            <div class="row mb-3">
                <!-- Campo para el nombre del cliente -->
                <div class="col-6">
                    <label for="nombre" class="form-label">Nombre del Cliente:</label>
                    <input type="text" class="form-control"
                        value="<?php $nombre ?>"
                        disabled="disabled">
                </div>

                <!-- Campo para el tipo de vehiculo-->
                <div class="col-6">
                    <label for="tipo" class="form-label">Tipo de Vehiculo:</label>
                    <input type="text" class="form-control"
                        value="<?php $tipo ?>"
                        disabled="disabled">
                </div>
                <!-- Campo para la direccion del destino -->
                <div class="col-6">
                    <label for="servicios" class="form-label">Nuemero de Servicios:</label>
                    <input type="text" class="form-control"
                        value="<?php $servicio ?>"
                        disabled="disabled">
                </div>

                <!--  campos dinamicos-->
                <?php
                for ($i = 0; $i < $servicio; $i++) {
                    echo '
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="nombreservicio' . $i . '" class="form-label">Nombre del Servicio ' . ($i + 1) . '</label>
                                        <input type="text" class="form-control" name="nombreservicio" id="nombreservicio' . $i . '">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="costo' . $i . '" class="form-label">Costo del Servicio ' . ($i + 1) . '</label>
                                        <input type="number" class="form-control" id="costoServicio' . $i . '" name="costoServicio">
                                    </div>   
                                </div>';
                }

                ?>

                <!-- Botón para enviar el formulario -->
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Calcular</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                </div>

        </form>


    </div>




    <!-- Enlace al script de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>