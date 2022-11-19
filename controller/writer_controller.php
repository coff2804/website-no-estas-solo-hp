<?php
    require 'editor.php';
    
    session_start();
    
    if(isset($_POST['subir']) && $_POST['subir'] == 'Subir'){

        require 'image_function.php';

        $sTitle = isset($_POST['title_article']) ? $_POST['title_article'] : 'Ningun titulo';
        $iTag = isset($_POST['type_content']) ? intval($_POST['type_content']) : 0;
        $sContent = isset($_POST['content']) ? $_POST['content'] : 'Ningun contenido';

        $iAutor = isset($_SESSION['userID']) ? $_SESSION['userID'] : 0;
        // echo $iAutor;
        $sDate = date('Y/m/d');

        $objEditor = new Editor;
        $response = $objEditor->addNotice($sTitle,$sContent,$sDate,$iAutor,$iTag,$newRute);


        if($response == 1){
            header('Location: ../view/privateview/view_writer.php?e=1');
        }else if($responseP == 2){
            header('Location: ../view/privateview/view_writer.php?e=2');
        }else if($responseP == 3){
            header('Location: ../view/privateview/view_writer.php?e=3');
        }        

    }


?>