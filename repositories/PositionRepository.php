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
            $positions[] = new position(
                $row["id"],
                $row["nom"],
                $row["nom_secondaire"],
                $row["position_effectif"]
            );
        }
        return $positions;
  
    }


    public function findById(int $id)
    {
        $sql = "
            SELECT * FROM position WHERE id=:id;
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "id" => $id
        ]);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $position = new position(
                $row["id"],
                $row["nom"],
                $row["nom_secondaire"],
                $row["position_effectif"]
            );
        }
        return $position;
    }

}