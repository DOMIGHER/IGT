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
    <form action="<?= base_url('index.php/InfoEmpresaC/EditarE/') . $deta[0]->idInfoEmpresa ?>" method="POST">
        <div class="row">
            <div class="row">

                        <label class="form-label">Información: </label>
                        <input type="text" class="form-control" name="Descripcion" value="<?= $deta[0]->Descripcion ?>">
                    

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