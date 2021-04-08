<?php

    class Conexion{

        private $local = 'bpcqbf154ajaz6xz1taq-mysql.services.clever-cloud.com';

        private $user = 'uuovso0zl7kt84ck';

        private $pass = 'GYDWOufXJgI4fojzEMMa';

        private $port = '3306';

        private $bd = 'bpcqbf154ajaz6xz1taq';

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





