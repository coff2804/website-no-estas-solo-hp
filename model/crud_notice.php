<?php
    // require 'connection.php';

    class CrudNotice{

        public function insertNotice($objNoticeP){
            $sCrud = "INSERT INTO register_article (title, type_article, users, date_register, article_content, image_rute) VALUES ('". 
            $objNoticeP->title."',".$objNoticeP->tag.",".$objNoticeP->autor.",'".$objNoticeP->dateNotice."','".$objNoticeP->content."','".$objNoticeP->imageRute."')";
        
            $objConnect = $this->generatedConnection();

            if($objConnect){
                $response = $objConnect->query($sCrud);
                if($response){
                    return 1;
                }else{
                    return 2;
                }
            }else{
                return 3;
            }
            
        }

        public function lastRegister(){

            $sCrud = "SELECT MAX(id) AS id FROM register_article";
            $objConnect = $this->generatedConnection();

            if($objConnect){
                $response = $objConnect->query($sCrud);
                return $response;
            }else{
                return false;
            }

        }

        public function generatedConnection(){
            $connect = new Connection;
            $connecting = $connect->setConnect();
            return $connecting;
        }

    }

?>