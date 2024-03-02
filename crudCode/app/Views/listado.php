<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Vista de listado</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/crear' ?>">
                  
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">
                    <label for="paterno">Apellido Paterno</label>
                    <input type="text" name="paterno" id="paterno" class="form-control">
                    <label for="materno">Apellido Materno</label>
                    <input type="text" name="materno" id="materno" class="form-control">
                    <br>
                    <button class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
        <h2 class="text-center">Listado de Personas</h2> 
        
        <?php //print_r($datos); ?>
        <div class="row">
          <div class="col-sm-12">
            <div class="table table-responsive">
              <table class="table table-hover table-bordered">
                <tr>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Edita</th>
                  <th>Eliminar</th>

                </tr>

                <?php foreach($datos as $key): ?>
                  <tr>
                    <td><?php echo $key->nombre; ?></td>
                    <td><?php echo $key->paterno; ?></td>
                    <td><?php echo $key->materno; ?></td> 
                    
                    <td>
                      <a href="<?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" 
                      class="btn btn-warning btn-sm">Editar</a>
                  </td>

                    <td>
                      <a href="<?php echo base_url().'/eliminar/'.$key->id_nombre ?>" 
                       class="btn btn-danger btn-sm">Eliminar</a>
                  </td>
                    
                  </tr>

                  <?php endforeach; ?>

              </table>
            </div>
          </div>
        </div> 
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" ></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javaScript">


      let mensaje = <?php echo $mensaje ?>

      if(mensaje == '1'){
        swal(':D','Registro exitoso','success');
        
      } else if (mensaje == '0'){
        swal(':(','No se pudo agregar la informacion','error');
      } else if (mensaje == '2'){
        swal(':)','Actualizacion exitosa','error');
      } else if (mensaje == '3'){
        swal(':(','Fallo al actualizar','error');
      }else if (mensaje == '4'){
        swal(':)','Registro Eliminado','error');
      } else if (mensaje == '5'){
        swal(':(','Error al Eliminar','error');
      }

    </script>

  </body>
</html>

https://www.youtube.com/watch?v=TG0wht9j18I&list=PLoRfWwOOv4jxNRULa3V7xBaTtAwyijVTd&index=3