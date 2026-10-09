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
            $effectifs[] = new effectif(
            $row["id"],
            $row["nom"]
            );
        }

     return $effectifs;
    }


    public function findById(int $id)
    {
        $sql = "
            SELECT * FROM effectif WHERE id=:id;
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "id" => $id
        ]);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $effectif = new effectif(
                $row["id"],
                $row["nom"]
            );
        }
        return $effectif;
    }

}