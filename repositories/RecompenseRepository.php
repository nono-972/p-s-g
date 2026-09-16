<?php

class RecompenseRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array 
    {
               $sql = "
            SELECT 
                recompense.id,
                recompense.nom,
                recompense.année,
                recompense.trophees_id
            FROM recompense;
        ";

        $stmt = $this->pdo->query($sql);
 
       $recompenses = [];  


        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $recompenses[] = new Recompense(
                $row["id"],
                $row["nom"],
                $row["année"],
                $row["trophees_id"],
            );
        }
        return $recompenses;
  
    }

}