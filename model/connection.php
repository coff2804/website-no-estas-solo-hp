<?php
    class Connection{

        public $sErrorMessage;
        public $sErrorCode;

        public function setConnect(){
            require 'config.php';
            try{
                $connect = new mysqli($host,$user,$pass,$bdname);
                $connect->set_charset('utf8');
                return $connect;
            }catch(Exception $e){
                $this->sErrorMessage = $e->getMessage();
                $this->sErrorCode = $e->getCode();
            }
        }
    }
?>