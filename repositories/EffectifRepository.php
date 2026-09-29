<?php

class EffectifRepository {
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function findAll(): array 
    {
     $sql = "
            SELECT * FROM effectif;
        ";

        $stmt = $this->pdo->query($sql);

      $effectifs = [];  


      while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $effectifs[] = new Effectif(
            $row["id"],
            $row["nom"]
            );
        }

     return $effectifs;
    }


}