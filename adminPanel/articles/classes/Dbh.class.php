<?php
    class Dbh {
        // private $host = "sql213.epizy.com";
        // private $dbname = "epiz_25235384_debattleDB";
        // private $uid = "epiz_25235384";
        // private $pwd = "EuJCv1EE366U0X";

        private $host = "localhost";
        private $dbname = "thebattle";
        private $uid = "root";
        private $pwd = "";

        protected function connect() {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";";
            $pdo = new PDO($dsn, $this->uid, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }
?>