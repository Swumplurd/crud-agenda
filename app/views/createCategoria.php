<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Crear Categoria</h1>
                <div>
                    <a class="btn btn-danger" href="./app/model/process/sessionClose.process.php">Cerrar Sesion</a>
                </div>
            </div>
            <div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp">
                    <div id="nombreHelp" class="form-text">Ingresa el nombre a actualizar</div>
                </div>

                <button id="crear" class="btn btn-success">Crear categoria</button>
                <a class="btn btn-info" href="./read">Regresar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <hr>
            <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <th>Nombre</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($categorias as $categoria) :
                    ?>
                        <tr>
                            <td><?php echo $categoria["nombre"] ?></td>
                            <td>
                                <a class="btn btn-warning" href="./updateCategoria&id=<?php echo $categoria["id"] ?>">Actualizar</a>
                            </td>
                            <td>
                                <button onclick="eliminarCategoria(<?php echo $categoria['id'] ?>)" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
require "./app/controller/createCategoria.controller.php";
?>

<script>
    const eliminarCategoria = (id) => {
        Swal.fire({
            title: '¿Estas seguro de eliminar la categoria?',
            text: "No podras recuperar la categoria si la borras!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borrarla'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "./app/model/process/deleteCategoria.process.php",
                    data: {
                        id
                    },
                    type: "POST",
                    success: () => {
                        Swal.fire({
                            title: 'Categoria eliminada',
                            text: "Borraste la categoria con exito",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            location.reload()
                        })
                    },
                    error: () => {
                        Swal.fire({
                            title: 'No se pudo elimiar',
                            text: "no borraste la categoria",
                            icon: 'error'
                        })
                    }
                })
            }
        })
    }
</script>