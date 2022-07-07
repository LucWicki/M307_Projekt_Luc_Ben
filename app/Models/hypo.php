<?php 

    class hypo{


        /**
        * @var PDO
         */
        public $db;
        
        public int $selectbefehl = 'SELECT mortgages.id FROM mortgages INNER JOIN erfassen ON erfassen.fk_mortgages = mortgages.id';
        public string $name;
        public string $email;
        public int $telefon;
        public int $risikostufe;
        public string $hypopaket;

        public function __construct(string $email, string $name, int $telefon, int $risikostufe, int $selectbefehl ){
            $this->name = $name;
            $this->email = $email;
            $this->telefon = $telefon;
            $this->risikostufe = $risikostufe;
            $this->hypopaket = $selectbefehl;
            $this->db = db();

        }
        //string $hypopaket
        public function erfassen(){

            
            $statement = $this->db->prepare('INSERT INTO `erfassen` (name, email,  telefon, risikostufe, fk_mortgages) VALUES (:name, :email,  :telefon, :risikostufe, :fk_mortgages)');
            $statement->bindParam(':email', $this->email, PDO::PARAM_STR);
            $statement->bindParam(':name', $this->name, PDO::PARAM_STR);
            $statement->bindParam(':telefon', $this->telefon, PDO::PARAM_INT);
            $statement->bindParam(':risikostufe', $this->risikostufe, PDO::PARAM_INT);
            $statement->bindParam(':fk_mortgages', $this->hypopaket, PDO::PARAM_INT);

            return $statement->execute();

        }


        



    }
















?>