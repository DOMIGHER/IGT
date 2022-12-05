<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar camioneta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<div class="container">
    <?php echo validation_errors(); ?>
    <form action="<?= base_url('index.php/CamionetasC/insertE/')?>" method="POST">
        <div class="row">
            <div class="row">

            <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Modelo: </label>
                        <select name="modelo">
                            <option value="Ford Escape">Ford Escape</option>
                            <option value="Nissan X-Trail">Nissan X-Trail</option>
                            <option value="SEAT Ateca">SEAT Ateca</option>
                            <option value="Kia Sportage">Kia Sportage</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Fecha de compra: </label>
                        <input type="date" class="form-control" name="fecha_compra">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-label">Peso de carga: </label>
                        <input type="number" class="form-control" name="peso_carga">
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Pais de origen: </label>
                        <select name="pais_de_origen">
                            <option value="Mexico">México</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Canada">Canada</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>

                <div class="col-4">
                    <div class="mb-3">
                        <label class="form-kabel">Clase de vehiculo: </label>
                        <select name="clase_vehiculo">
                            <option value="Volteo">Volteo</option>
                            <option value="Carga">Carga</option>
                            <option value="Mudanza de inmuebles">Mudanza de inmuebles</option>
                        </select>
                    </div>
                </div>

            <hr style="width:1100px; height:2px;background:black">

            <div class="row">
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <input type="submit" value="Actualizar">

                        </div>
                    </div>

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