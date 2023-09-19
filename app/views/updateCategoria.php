<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar Categoria</h1>
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