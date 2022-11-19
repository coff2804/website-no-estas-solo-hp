<?php
    require '../../controller/user_list_controller.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <ul class="menu">
        <li><a href="view_administrator.php">Inicio</a></li>
        <li><a href="#">Editar Sitio</a></li>
        <li><a href="./create_user.php">Crear Usuario</a></li>
        <li><a href="./user_list.php">Lista de Usuarios</a></li>
    </ul>
    <br>
    <div class="tabla">
    <div class="col-md-8">
        <table class="table" >
            <thead class="table-success table-striped" >
                <?php
                    GenerateTable($objData);
                ?>
            </thead>
        </table>
    </div>
    </div>
    
</body>
</html>