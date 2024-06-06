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
        <h1>Eventos</h1>
        <div class="row">
            <div class="col-md-6">
                <form id="evento" name="evento" method="Post" action="<?php echo base_url(); ?>index.php/evento/registrar">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fec_inicio" class="form-label">Inicio</label>
                            <input type="datetime-local" class="form-control" id="fec_inicio" name="fec_inicio" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="fec_fin" class="form-label">Fin</label>
                            <input type="datetime-local" class="form-control" id="fec_fin" name="fec_fin" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Inicio</th>
                            <th scope="col">Fin</th>
                            <th scope="col" colspan="2"  class="text-center">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($eventos->result() as $evento) { ?>

                            <tr>
                                <th scope="row"><?= $evento->id ?></th>
                                <td><?= $evento->titulo ?></td>
                                <td><?= $evento->descripcion ?></td>
                                <td><?= $evento->fecha_inicio ?></td>
                                <td><?= $evento->fecha_fin ?></td>
                                <td>
                                <form name="editar" method="Post" action="<?php echo base_url(); ?>index.php/evento/viewEditEvento">
                                    <input type="hidden" name="id" value ="<?= $evento->id ?>">
                                    <button type="submit" class="btn btn-warning">Editar</button>
                                </form>
                                </td>
                                <td>
                                <form name="editar" method="Post" action="<?php echo base_url(); ?>index.php/evento/eliminar">
                                    <input type="hidden" name="id" value ="<?= $evento->id ?>">
                                    <button type="submit" class="btn btn-danger">Eliminar</button></td>
                                </form>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>



</html>