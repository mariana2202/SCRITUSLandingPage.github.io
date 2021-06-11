<?php
    class ConectionBD{

        public static function getConection(){

            $user = "root";
            $pass = "";

            try{
                $cxn = new PDO('mysql:host=localhost;dbname=scritus', $user, $pass);
                return $cxn;
            } catch(PDOException $e){
                print "error!" . $e->getMessage() . "</br>";
                die();
                return null;
            }

        }

    }

?>