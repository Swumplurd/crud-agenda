



<div class="container mt-3">
    <div class="row">
        <div class="col">
            <a class="btn btn-success" href="./create">Agregar</a>
            <a class="btn btn-success" href="./createCategoria">Agregar Categoria</a>
            
            <hr>

            <table class="table table-secondary table-striped table-hover table-bordered table-sm table-responsive-sm">
                <thead>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Categoria</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                </thead>
                <tbody>
                    <?php 
                        foreach($contactos as $contacto):
                    ?>
                    <tr>
                        <td><?php echo $contacto["nombre"] ?></td>
                        <td><?php echo $contacto["telefono"] ?></td>
                        <td><?php echo $contacto["email"] ?></td>
                        <td><?php echo $contacto["nombre_categoria"] ?></td>
                        <td>
                            <a class="btn btn-warning" href="./update&id=<?php echo $contacto["id"] ?>">Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminar(<?php echo $contacto['id']?>)" class="btn btn-danger">Eliminar</button>
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
    require "./app/controller/delete.controller.php"
?>