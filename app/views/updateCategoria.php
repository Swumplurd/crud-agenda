<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex justify-content-between align-items-center">
                <h1>Actualizar Categoria</h1>
                <div>
                    <a class="btn btn-danger" href="./app/model/process/sessionClose.process.php">Cerrar Sesion</a>
                </div>
            </div>
            <div>
                <input type="text" id="id" value="<?php echo $categoria["id"]?>" hidden>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" value="<?php echo $categoria["nombre"] ?>">
                    <div id="nombreHelp" class="form-text">Ingresa el nombre a actualizar</div>
                </div>

                <button id="actualizar" class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </div>
</div>

<?php
    require "./app/controller/updateCategoria.controller.php"
?>