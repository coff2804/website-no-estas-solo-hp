<?php
    require_once 'users.php';
    require 'notice.php';
    require '../model/crud_notice.php';

    class Editor extends Users{

        public function addNotice($titleP,$contentP,$dateNoticeP,$autorP,$tagP,$imageRuteP){
            $objNotice = new Notice($titleP,$contentP,$dateNoticeP,$autorP,$tagP,$imageRuteP);

            $objCrud = new CrudNotice;

            $response = $objCrud->insertNotice($objNotice);
            return $response;
        }
        public function editNotice(){}
        public function delateNotice(){}

    }
?>