<?php


    function message(){
        if(isset($_GET['e'])){
            if($_GET['e'] == 1){
                return 'Registro de usuario completado';
            }else if($_GET['e'] == 2){
                return 'Problemas para ingresar usuario';
            }else if($_GET['e'] == 3){
                return 'No se pudo conectar a la base de datos';
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
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

    <div class="user_new">
    <div class="container mt-5">
        <div class="row"> 
            <div class="col-md-3">
                <h2>Nuevo Usuario</h2>
                <div><?php if(isset($_GET['e'])){echo message();}?></div>
                <form action="../../controller/create_user_controller.php" method="POST">
                    <input type="text" class="form-control mb-3" name="name" placeholder="Nombres">
                    <input type="text" class="form-control mb-3" name="lastname" placeholder="Apellidos">
                    <input type="text" class="form-control mb-3" name="phone" placeholder="Telefono">
                        <label>Tipo de Usuario</label> 
                        <select name="type_user">
                            <optgroup label="Tipo de Usuario">
                                <option value="1">Administrador</option>
                                <option value="2">Editor</option>
                            </optgroup>
                        </select>
                    <br>

                    <input type="submit" value="Crear" name="create" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>