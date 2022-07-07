<?php 

    class hypo{


        /**
        * @var PDO
         */
        public $db;
        
        public $selectbefehl = 'SELECT mortgages.package, erfassen.id FROM mortgages INNER JOIN erfassen ON erfassen.fk_mortgages = mortgages.id';

        public string $name;
        public string $email;
        public int $telefon;
        public int $risikostufe;
        public string $hypopaket;

        public function __construct(string $email, string $name, int $telefon, int $risikostufe, ){
            $this->name = $name;
            $this->email = $email;
            $this->telefon = $telefon;
            $this->risikostufe = $risikostufe;
           // $this->hypopaket = $hypopaket;
            $this->db = db();

        }
        //string $hypopaket
        public function erfassen(){

            
            $statement = $this->db->prepare('INSERT INTO `erfassen` ( email, name, telefon, risikostufe) VALUES (:email, :name, :telefon, :risikostufe)');
            $statement->bindParam(':email', $this->email, PDO::PARAM_STR);
            $statement->bindParam(':name', $this->name, PDO::PARAM_STR);
            $statement->bindParam(':telefon', $this->telefon, PDO::PARAM_INT);
            $statement->bindParam(':risikostufe', $this->risikostufe, PDO::PARAM_INT);
            //$statement->bindParam(':hypopaket', $this->hypopaket, PDO::PARAM_STR);

            return $statement->execute();

        }


        



    }
















?>