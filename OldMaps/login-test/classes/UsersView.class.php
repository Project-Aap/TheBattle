<?php
    class UsersView extends UsersModel {
        public function checkUidAndPwd($uid, $pwd) {
            $results = $this->getUidAndPwd($uid, $pwd);
            
            if (array_key_exists(0, $results)) {
                return true;
            } else {
               return false;
            }
        }

        public function checkUidOrPwd($uid, $pwd) {
            $results = $this->getUidOrPwd($uid, $pwd);
            
            if (array_key_exists(0, $results)) {
                return true;
            } else {
                return false;
            }
        }

        public function login($uid, $email) {
            session_start();
            $results = $this->getUidAndPwd($uid, $email);
            $_SESSION["idUsers"] = $results[0]["idUsers"];
        }
    }
?>