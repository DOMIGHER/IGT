<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cuenta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<div class="container">
    <?php echo validation_errors(); ?>
    <form action="<?= base_url('index.php/ClienteC/insertE/') ?>" method="POST">
        <div class="row">
            <div class="row">

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" name="apellido_paterno" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" name="apellido_materno" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="correo">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="contrasenia">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Pais de nacimiento: </label>
                        <select name="nacionalidad">
                            <option value="Mexíco">Mexíco</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Canada">Canada</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Sexo</label>
                        <select name="sexo" >
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Fecha de nacimiento: </label>
                        <input type="date" class="form-control" name="fecha_nacimiento" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Telefono fijo: </label>
                        <input type="number" class="form-control" name="telefono_fijo" >
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="number" class="form-control" name="celular">
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <input type="submit">

                        </div>
                    </div>

                </div>
            </div>

    </form>
    <style>
        #vertical-bar {
            border-left: 1px solid rgb(0, 0, 0);
            width: 1px;
            height: 100px;
            margin-left: 200px;
        }
    </style>
</div>