<?php 

    class hypo{

        public $db;

        public string $name;
        public string $email;
        public int $telefon;
        public int $risikostufe;
        public string $hypopaket;

        public function __construct(string $name, string $email, int $telefon, int $risikostufe, string $hypopaket){
            $this->name = $name;
            $this->email = $email;
            $this->telefon = $telefon;
            $this->risikostufe = $risikostufe;
            $this->hypopaket = $hypopaket;
        }

        public function erfassen(){

            
            $statement = $this->db->prepare('INSERT INTO `erfassen` (name, email, telefon, risikostufe) VALUES (:name, :email, :telefon, :risikostufe)');
            $statement->bindParam(':name', $this->name, PDO::PARAM_STR);
            $statement->bindParam(':email', $this->email, PDO::PARAM_STR);
            $statement->bindParam(':telefon', $this->telefon, PDO::PARAM_INT);
            $statement->bindParam(':risikostufe', $this->risikostufe, PDO::PARAM_INT);
            $statement->bindParam(':hypopaket', $this->hypopaket, PDO::PARAM_STR);

            return $statement->execute();



        }




    } 
















?>