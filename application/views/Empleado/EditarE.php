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
    <form action="<?= base_url('index.php/EmpleadoC/EditarE/') . $deta[0]->idempleado ?>" method="POST">
        <div class="row">
            <div class="row">

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="nombre" value="<?= $deta[0]->nombre ?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Apellido Paterno: </label>
                        <input type="text" class="form-control" name="apellido_paterno" value="<?= $deta[0]->apellido_paterno ?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Apellido Materno: </label>
                        <input type="text" class="form-control" name="apellido_materno" value="<?= $deta[0]->apellido_materno ?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="correo" value="<?= $deta[0]->correo ?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="contrasena" value="<?= $deta[0]->contrasena ?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Pais de nacimiento: </label>
                        <select name="nacionalidad" value="<?= $deta[0]->nacionalidad ?>">
                            <option value="Mexicana">Mexicana</option>
                            <option value="Estadounidense">Estadounidense</option>
                            <option value="Canadiense">Canadiense</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Sexo</label>
                        <select name="sexo" value="<?= $deta[0]->sexo ?>">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Fecha de nacimiento: </label>
                        <input type="date" class="form-control" name="fecha_nacimiento" value="<?= $deta[0]->fecha_nacimiento ?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Numero de licencia: </label>
                        <input type="number" class="form-control" name="num_licencia">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">RFC: </label>
                        <input type="text" class="form-control" name="rfc" value="<?= $deta[0]->rfc ?>">
                    </div>
                </div>


                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Antecedentes penales</label>
                        <select name="antecedentes_penales" value="<?= $deta[0]->antecedentes_penales ?>">
                            <option value="SI">SI</option>
                            <option value="NO">NO</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Telefono fijo: </label>
                        <input type="number" class="form-control" name="telefono_fijo" value="<?= $deta[0]->telefono_fijo ?>">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Celular: </label>
                        <input type="number" class="form-control" name="celular" value="<?= $deta[0]->celular ?>">
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <input type="submit" value="Actualizar">

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