<?php

class PositionRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array 
    {
            $sql = "
            SELECT 
            position.id,
            position.nom,
            position.nom_secondaire,
            position.position_effectif
        FROM position;
        ";

        $stmt = $this->pdo->query($sql);
 
       $positions = [];  


        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $positions[] = new Position(
                $row["id"],
                $row["nom"],
                $row["nom_secondaire"],
                $row["position_effectif"]
            );
        }
        return $positions;
  
    }

}