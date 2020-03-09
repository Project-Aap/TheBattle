<?php
    class UsersModel extends Dbh {
        protected function getUidAndPwd($uid, $pwd) {
            $sql = "SELECT * FROM users WHERE uidUsers = ? AND pwdUsers = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$uid, $pwd]);

            $results = $stmt->fetchAll();
            return $results;
        }

        protected function getUidOrPwd($uid, $pwd) {
            $sql = "SELECT * FROM users WHERE uidUsers = ? OR pwdUsers = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$uid, $pwd]);

            $results = $stmt->fetchAll();
            return $results;
        }
    }
?>