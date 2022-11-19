<?php
    require 'users.php';

    $sUser = isset($_POST['user']) ? $_POST['user'] : '';
    $sPass = isset($_POST['pass']) ? $_POST['pass'] : '';

    $objUsers = new Users;

    $objUsers->setAccount($sUser);
    $objUsers->setPassword($sPass);

    $isLogged = $objUsers->checkLogin();

    createSesion($isLogged);

    function createSesion($isLog){
        //echo 'Estoy aqui';
        // echo $isLog;
        if($isLog->num_rows == 1){
            //echo 'Dentro del if';
            $data = $isLog->fetch_assoc();
            session_start();
            $_SESSION['userID'] = $data['id'];
            $_SESSION['userName'] = $data['name_user'] . ' ' . $data['lastname_user'];
            $_SESSION['userAccount'] = $data['users_accounts'];
            $_SESSION['userType'] = $data['type_user'];
            $_SESSION['userPhone'] = $data['phone'];
            $_SESSION['userPass'] = $data['passwords'];
            $_SESSION['exists'] = true;
            header('Location: ../view/privateview/login.php');
        }else{
            header('Location: ../view/privateview/login.php?resp=1');
        }
    }

?>