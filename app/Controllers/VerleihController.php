<?php 

    class VerleihController{

        public function erfassen(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $pdo = db();

            $statement = $pdo->prepare("INSERT INTO `verleiheanmeldung` (Email) VALUES (:Email)");
            $statement->bindParam(':Email', $_POST['Email'], PDO::PARAM_STR);

            $statement->execute();
            
            header('Location: uebersicht');

            } 
            require 'app/Views/verleih.view.php';
        }

        public function uebersicht(){

                $pdo = db();
    
                $statement = $pdo->prepare('SELECT * FROM erfassen');
                $statement->execute();
    
                $result = $statement->fetchAll();
    
    
                require 'app/Views/uebersicht.view.php';
    
    
            }
        }

        




















?>