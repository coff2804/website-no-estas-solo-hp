<?php
    require 'users.php';

    $objUser = new Users;
    echo 'Hola';
    //$objData = new $objUser->allUsers();
    echo $objUser->allUsers();

    function GenerateTable($objDataP){

        if(gettype($objDataP) != 'boolean'){
			echo '<table>';
				echo '<tr>';
					echo '<th>ID</th>';
					echo '<th>Nombres</th>';
					echo '<th>Apellidos</th>';
					echo '<th>Cuenta</th>';
					echo '<th>Tipo de Usuario</th>';
					echo '<th>Telefono</th>';
				echo '</tr>';		
			while($counter = $objDataP->fetch_assoc()){
				echo '<tr>';
				echo '<td>'.$counter['id'].'</td>';
				echo '<td>'.$counter['name_user'].'</td>';
				echo '<td>'.$counter['lastname_user'].'</td>';
				echo '<td>'.$counter['users_accounts'].'</td>';
				echo '<td>'.$counter['type_user'].'</td>';
				echo '<td>'.$counter['phone'].'</td>';
				echo '</tr>';
			}
			echo '</table>';
        }else{
            echo 'Error al cargar tabla de usuarios';
        }
    }


?>