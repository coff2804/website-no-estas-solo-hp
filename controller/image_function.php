<?php
    //require '../model/crud_notice.php';

    //echo 'Hola';

    $objCrud = new CrudNotice;
    $data = ($objCrud->lastRegister())->fetch_assoc();

    $lastID = $data['id'];
    $newID;
    $newName;

   // echo $lastID;
    
   // $_SESSION['ultimoID'] = $lastID; 

    if(isset($_FILES['article_imagen']) && $_FILES['article_imagen']['error'] === UPLOAD_ERR_OK){

        //echo 'Estoy aqui';

        $originRute = $_FILES['article_imagen']['tmp_name'];
        $fileName = $_FILES['article_imagen']['name'];
        $fileNameCmps = explode('.', $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

            
            // echo 'Ruta: ' . $rutaOrigen . '<br>';
            // echo 'Nombre de archivo: ' . $nombreArchivo. '<br>';
            // echo 'Tamaño del archivo: ' . $tamArchivo. '<br>';
            // echo 'Tipo de archivo: ' . $tipoArchivo. '<br>';
            // echo 'Nose 1: ' . $separacionArchivo[0];
            // echo 'Nose 2: ' . $extensionArchivo;
            

            //$nuevoNombre = md5(time() . $nombreArchivo) . '.' . $extensionArchivo;

        $namePermanent = 'IMG_NOTICE';
        if($lastID != NULL){
            $newID = $lastID + 1;
        }else{
            $newID = 1;
        }
        $newName = $namePermanent . $newID.'.' . $fileExtension;

        $allowedfileExtensions  = array('jpg','png');
            
        if(in_array($fileExtension, $allowedfileExtensions )){

            $fileNewDir = '../view/images/article/';
            $newRute = $fileNewDir . $newName;

            move_uploaded_file($originRute, $newRute);
        }
        
        //echo 'Estoy aqui';
    }
?>