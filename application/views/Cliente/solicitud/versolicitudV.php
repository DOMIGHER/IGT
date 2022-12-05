<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver solicitud</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
</head>
<body>

<div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h6 style="color:black;">  
                <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Administra Solicitud </FONT></p>  
            </h6>
          </div>
        </div>
      </nav>
    <div class="container">

    <table class="table table-striped table-bordered">
        <thead>
            <th>Numero de solicitud</th>
            <th>Ver detalles</th>
            <th>Eliminar</th>
            <th>Actualizar</th>
        </thead>
        <tbody>
            <?php foreach ($solicitud as $key ): ?>
                <tr>
                    <td><?=$key->idsolucitud?></td>
                    <td><a class="btn btn-success" href="<?=base_url('index.php/SolicitudC/detallsolicitudcliente/').$key->idsolucitud?>">Ver detalles</a></td>
                    <td></td>
                    <td></td>
                </tr>
            
            <?php endforeach ?>

        </tbody>

    </table>

    </div>
</div>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>