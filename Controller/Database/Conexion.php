<?php

    class Conexion{

        private $local = 'localhost';

        private $user = 'root';

        private $pass = '';

        private $port = '3306';

        private $bd = 'bdprestamo';

        public function getcon(){


                $con = new PDO('mysql:host='.$this->local.';'.

                'port='.$this->port.';'.
    
                'dbname='.$this->bd,
    
                $this->user,
    
                $this->pass,

                array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $con;

        }

    }





