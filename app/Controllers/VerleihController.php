<?php 

    class VerleihController{

        public function erfassen(){
            
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $pdo = db();

            $statement = $pdo->prepare("INSERT INTO `verleiheanmeldung` (Email) VALUES (:Email)");
            $statement->bindParam(':Email', $_POST['Email'], PDO::PARAM_STR);

            $statement->execute();

            require 'app/Views/Verleih.view.php';
            }
        }

        public function uebersicht(){

            
                $pdo = db();
    
               /*  $statement = $pdo->prepare("INSERT INTO `verleiheanmeldung` (Name) VALUES (:Name)");
                $statement->bindParam(':Name', $_POST['Name'], PDO::PARAM_STR); */

    
    
            }
            /*
            $pdo = db();

            $statement = $pdo->prepare('SELECT * FROM verleiheanmeldung');
            $statement->execute();

            $result = $statement->fetchAll();

            require 'app/Views/uebersicht.view.php';
            */
        








    }












?>