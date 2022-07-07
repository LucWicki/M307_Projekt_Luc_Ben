<?php 

    class VerleihController{


        public function erfassen(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $erfassen = new hypo();
                $alle = $erfassen->erfassen();

           /*  header('Location: uebersicht'); */

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