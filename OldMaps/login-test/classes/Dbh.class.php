<?php
    class Dbh {
        private $host = "localhost";
        private $uid = "root";
        private $pwd = "";
        private $dbname = "login-test";

        protected function connect() {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";";
            $pdo = new PDO($dsn, $this->uid, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }
?>