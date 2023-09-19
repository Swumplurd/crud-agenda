


<div class="container">
    <div class="row">
        <div class="col">
            <h1>Crear Contacto</h1>
            <div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp">
                    <div id="nombreHelp" class="form-text">Ingresa el nombre</div>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" aria-describedby="telefonoHelp">
                    <div id="telefonoHelp" class="form-text">Ingresa el telefono</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ingresa el email</div>
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <select id="categoria" class="form-select" aria-label="Default select example">
                        <?php foreach ($categorias as $categoria): ?>
                        <option value="<?php echo $categoria["id"]?>"><?php echo $categoria["nombre"]?></option>
                        <?php endforeach ?>
                    </select>
                    <div id="categoriaHelp" class="form-text">Ingresa la categoria</div>
                </div>

                <button id="crear" class="btn btn-success">Crear contacto</button>
            </div>
        </div>
    </div>
</div>

<?php
    require "./app/controller/create.controller.php";
?>