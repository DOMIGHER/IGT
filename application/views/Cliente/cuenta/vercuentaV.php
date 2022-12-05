<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 

</head>
<body>

<div class="container">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <h6 style="color:black;">  
                <p align="center"><FONT FACE="Segoe UI" FONT SIZE="6"> Administra cuenta </FONT></p>  
            </h6>
          </div>
        </div>
      </nav>

<div class="container">

<?php foreach ($cliente as $key): ?>

<label>Nombre: <?=$key->nombre?> </label><br>
<label>Apellido paterno: <?=$key->apellido_paterno?> </label><br>
<label>Apellido materno: <?=$key->apellido_materno?> </label><br>
<label>Correo Electronico: <?=$key->correo?> </label><br>
<label>Nacionalidad: <?=$key->nacionalidad?> </label><br>
<label>Sexo: <?=$key->sexo?> </label><br>
<label>Fecha de nacimiento: <?=$key->fecha_nacimiento?> </label><br>
<label>Telefono fijo: <?=$key->telefono_fijo?> </label><br>
<label>Celular: <?=$key->celular?> </label><br>

<a class="btn btn-warning" href="<?=base_url('index.php/AdmcuentaC/updateCuenta/').$key->idcliente?>">Editar</a>

<?php endforeach ?>

</div>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>