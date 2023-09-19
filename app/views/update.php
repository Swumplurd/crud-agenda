<div class="container">
    <div class="row">
        <div class="col">
            <h1>Actualizar Contacto</h1>
            <div>
                <input type="text" id="id" value="<?php echo $contacto["id"]?>" hidden>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" value="<?php echo $contacto["nombre"] ?>">
                    <div id="nombreHelp" class="form-text">Ingresa el nombre a actualizar</div>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" value="<?php echo $contacto["telefono"] ?>">
                    <div id="telefonoHelp" class="form-text">Ingresa el telefono a actualizar</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $contacto["email"] ?>">
                    <div id="emailHelp" class="form-text">Ingresa el email a actualizar</div>
                </div>

                <button id="actualizar" class="btn btn-warning">Actualizar</button>
            </div>
        </div>
    </div>
</div>

<?php
    require "./app/controller/update.controller.php"
?>