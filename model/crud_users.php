<?php

    require 'connection.php';

    class CrudUsers{
        
        public function selectUsers($accountUsersP,$passUserP){

            // $sCrud = "SELECT * FROM users WHERE users_accounts='". $accountUsersP."' AND passwords= '".$passUserP."'";

            $sCrud = "SELECT users.id, users.name_user, users.lastname_user, users.users_accounts, users.phone, users.passwords, type_users.type_user FROM users INNER JOIN type_users ON users.type_user = type_users.id  WHERE users.users_accounts = '".$accountUsersP.
            "' AND users.passwords='".$passUserP."'";

            $objConnect = $this->generatedConnection();

            if($objConnect){
                $response = $objConnect->query($sCrud);
                return $response;
            }else{
                return false;
            }

        }

        public function insertUsers($sNameP,$sLastNameP,$sAccountP,$iTypeUserP,$sPhoneP,$sPassP){
            $sCrud = "INSERT INTO users (name_user,lastname_user,users_accounts,type_user,phone,passwords) VALUES ('".
            $sNameP."','". $sLastNameP. "','". $sAccountP. "',". $iTypeUserP. ",'". $sPhoneP. "','". $sPassP. "')";

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

        public function selectUsersComplete(){
            $sCrud = "SELECT users.id, users.name_user, users.lastname_user, users.users_accounts, users.phone, type_users.type_user FROM users INNER JOIN type_users ON users.type_user = type_users.id'";

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