<?php

    class DCliente {

        private $array;

        public function getItem(){



        }

        public function getsize(){

            return count($this->array);

        }

        public  function getArray(){

            return $this->array;

        }

        public function getList($bus){

            try {

            $tipo = 'B';

            $con = new Conexion();

            $pre = $con->getcon()->prepare("CALL SP_BUSDEL_CLIENTE(?,?)");

            $pre->bindValue(1,$bus, PDO::PARAM_STR);

            $pre->bindValue(2,$tipo, PDO::PARAM_STR);

            $pre->execute();

            foreach($pre as $row){

                $this->array[] =array(

                    'cod' => $row[0],

                    'nom' => $row[1],

                    'ape' => $row[2],

                    'dni' => $row[3]
                );

            }
            } catch (Exception $e) {

                echo $e->getMessage();
            }

            
        }
    }
