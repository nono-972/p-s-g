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
    }
}