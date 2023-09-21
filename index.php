<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        require "./app/views/includes/metatags.php"
    ?>
</head>
<body>
    
    <?php
        require "./app/model/crud.class.php";
        $crud = new Crud();
        if (isset($_GET["vista"])) {
            switch ($_GET["vista"]) {
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'read':
                    if (isset($_SESSION["session"])) {
                        $contactos = $crud->read();
                        include "./app/views/read.php";
                    } else {
                        header("location: ./home");
                    }
                    break;
                case 'create':
                    if (isset($_SESSION["session"])) {
                        $categorias = $crud->readCategoria();
                        include "./app/views/create.php";
                    } else {
                        header("location: ./home");
                    }
                    break;
                case 'createCategoria':
                    if (isset($_SESSION["session"])) {
                        $categorias = $crud->readCategoria();
                        include "./app/views/createCategoria.php";
                    } else {
                        header("location: ./home");
                    }
                    break;
                case 'update':
                    if (isset($_SESSION["session"])) {
                        $contacto = $crud->show($_REQUEST["id"]);
                        include "./app/views/update.php";
                    } else {
                        header("location: ./home");
                    }
                    break;
                case 'updateCategoria':
                    if (isset($_SESSION["session"])) {
                        $categoria = $crud->showCategoria($_REQUEST["id"]);
                        include "./app/views/updateCategoria.php";
                    } else {
                        header("location: ./home");
                    }
                    break;
                default:
                    header("location: ./read");
                    break;
            }
        } else {
            header("location: ./home");
        }
    ?>

    <?php
        require "./app/views/includes/scripts.php";
    ?>
</body>
</html>