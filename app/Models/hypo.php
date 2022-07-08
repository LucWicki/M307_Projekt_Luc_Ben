<?php 

    class hypo{


        /**
        * @var PDO
         */
        public $db;
        
/*         public $selectbefehl = 'SELECT mortgages.id, mortgages.package  FROM mortgages INNER JOIN erfassen ON erfassen.fk_mortgages = mortgages.id';
 */     public string $name;
        public string $email;
        public int $telefon;
        public string $risikostufe;
        public string $hypopaket;

        public function __construct(string $name = "", string $email = "", int $telefon =  0, string $risikostufe = "", string $hypopaket = ""){ //, int $selectbefehl
            $this->name = $name;
            $this->email = $email;
            $this->telefon = $telefon;
            $this->risikostufe = $risikostufe;
            $this->hypopaket = $hypopaket;
            $this->db = db();

        }
        //string $hypopaket
        public function erfassen(){

            
            $statement = $this->db->prepare('INSERT INTO `erfassen` (name, email,  telefon, risikostufe, hypopaket) VALUES (:name, :email,  :telefon, :risikostufe, :hypopaket)'); //, fk_mortgages, :fk_mortgages
            $statement->bindParam(':email', $this->email, PDO::PARAM_STR);
            $statement->bindParam(':name', $this->name, PDO::PARAM_STR);
            $statement->bindParam(':telefon', $this->telefon, PDO::PARAM_INT);
            $statement->bindParam(':risikostufe', $this->risikostufe, PDO::PARAM_INT);
            $statement->bindParam(':hypopaket', $this->hypopaket, PDO::PARAM_STR);
            /* $statement->bindParam(':fk_mortgages', $this->hypopaket, PDO::PARAM_INT); */

            return $statement->execute();

        }

        public function getAll() : array
        {
        $statement = $this->db->prepare('SELECT * FROM mortgages');
        $statement->execute();

        return $statement->fetchAll();
        }

    }


?>