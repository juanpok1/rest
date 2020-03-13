<?php
    class db{
        // Properties
        private $dbhost = '200.74.149.170';
        private $dbuser = 'EmpleadosFalabella';
        private $dbpass = 'ju4nM3l*';
        private $dbname = 'juanpmelo';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
