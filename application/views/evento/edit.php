<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Editar Evento</h1>
        <div class="row">
            <div class="col-md-6">
                <form id="evento" name="evento" method="Post" action="<?php echo base_url(); ?>index.php/evento/editar">
                    <input type="hidden" name="id" value ="<?= $eventos->id ?>">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $eventos->titulo;?>"  placeholder="Ingresa titulo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea class="form-control" name="descripcion" rows="3"><?php echo $eventos->descripcion;?></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fec_inicio" class="form-label">Inicio</label>
                            <input type="datetime-local" class="form-control" id="fec_inicio" name="fec_inicio" value="<?php echo $eventos->fecha_inicio;?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="fec_fin" class="form-label">Fin</label>
                            <input type="datetime-local" class="form-control" id="fec_fin" name="fec_fin" value="<?php echo $eventos->fecha_fin;?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>



</html>