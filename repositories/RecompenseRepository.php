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
            recompense.annee,
            recompense.trophees_id
        FROM recompense;
        ";

        $stmt = $this->pdo->query($sql);
 
       $recompenses = [];  


        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $recompenses[] = new recompense(
                $row["id"],
                $row["nom"],
                $row["annee"],
                $row["trophees_id"]
            );
        }
        return $recompenses;
  
    }

    
    public function findById(int $id)
    {
        $sql = "
            SELECT * FROM recompense WHERE id=:id;
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "id" => $id
        ]);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $recompense = new recompense(
                $row["id"],
                $row["nom"],
                $row["annee"],
                $row["trophees_id"]
            );
        }
        return $recompense;
    }

}