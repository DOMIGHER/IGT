<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">



    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <h6 style="color:black;">
                    <p align="center">
                        <FONT FACE="Segoe UI" FONT SIZE="6"> Clientes </FONT>
                    </p>
                </h6>
            </div>
    </div>
    </nav>

    <div class="container">
        <a class="btn btn-success" href="<?= base_url('index.php/ClienteC/insertE') ?>">Agregar Cliente</a>
    </div>
    <br>

    <div class="container">

        <table class="table table-striped table-bordered">
            <thead> 
                <th>ID: </th>
                <th>Nombre: </th>
                <th>Apellido paterno: </th>
                <th>Apellido materno: </th>
                <th>Correo: </th>
                <th>Sexo: </th>
                <th>Telefono_fijo: </th>
                <th>Celular: </th>

                <th>Operaciones</th>
            </thead>
            <tbody>
                <?php foreach ($informacion as $key) : ?>
                    <tr>
                        <td><?= $key->idcliente ?></td>
                        <td><?= $key->nombre ?></td>
                        <td><?= $key->apellido_paterno ?></td>
                        <td><?= $key->apellido_materno ?></td>
                        <td><?= $key->correo ?></td>
                        <td><?= $key->sexo ?></td>
                        <td><?= $key->telefono_fijo ?></td>
                        <td><?= $key->celular ?></td>


                        <td><a class="btn btn-success" href="<?= base_url('index.php/ClienteC/detallesE/') . $key->idcliente ?>">Detalles</a></td>
                        <td><a class="btn btn-warning" href="<?= base_url('index.php/ClienteC/EditarE/') . $key->idcliente ?>">Editar</a></td>
                        <td><a class="btn btn-danger" href="<?= base_url('index.php/ClienteC/borrarE/') . $key->idcliente ?>">Borrar</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    </div>

</html>