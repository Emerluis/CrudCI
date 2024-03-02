<?php 

  $idNombre = $datos[0]['id_nombre'];
  $nombre = $datos[0]['nombre'];
  $paterno = $datos[0]['paterno'];
  $materno = $datos[0]['materno'];

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Vista de Actualizar</title>
  </head>
  <body>

    <div class="container">
        <h1>Actualizar de listado</h1>

        <?php //print_r($datos); ?>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                  
                    <input type="text" name="idNombre" id="idNombre" hidden=""
                    value="<?php echo $idNombre?>">

                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"
                    value="<?php echo $nombre?>">

                    <label for="paterno">Apellido Paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control"
                    value="<?php echo $paterno?>">

                    <label for="materno">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" class="form-control"
                    value="<?php echo $materno?>">

                    <br>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
