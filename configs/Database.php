<?php

class Database {

   private $conn;
 
   public function connect() {

       $this->conn = null;

           try {

      			 $this->conn = new PDO('mysql:host=localhost;dbname=upevent', 'root', 'test123');

            }catch(Exception $e){

        		echo 'Une erreur s\'est produite lors de la connexion à la bdd '.$e->getMessage();

           }

           return $this->conn;  
   }

}