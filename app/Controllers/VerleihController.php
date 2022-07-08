<?php 

    class VerleihController{


        public function index(){
            $erfassen = new hypo();
            $erfassen = $erfassen->getAll();

            require 'app/Views/verleih.view.php';
        }
        

        public function erfassen(){

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $erfassen = new hypo($_POST['name'], $_POST['email'], $_POST['telefon'], $_POST['risikostufe'], $_POST['hypopaket']); //, $_POST['fk_mortgages']
                $erfassen->erfassen();
                
                 header('Location: uebersicht');  

            } 
            else
            require 'app/Views/verleih.view.php';
        }

        public function uebersicht(){

                $pdo = db();
    
                $statement = $pdo->prepare('SELECT erfassen.name, erfassen.email, erfassen.telefon, erfassen.risikostufe, mortgages.package FROM erfassen INNER JOIN mortgages ON erfassen.fk_mortgages = mortgages.id');
                $statement->execute();
    
                $result = $statement->fetchAll();
    
                require 'app/Views/uebersicht.view.php';
    
    
            }
        }

        




















?>