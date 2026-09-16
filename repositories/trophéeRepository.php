<?php

class TrophéeRepository{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array 
    {
    $sql = "
            SELECT * FROM trophée;
        ";

       $stmt = $this->pdo->query($sql); 
  
       $trophées = [];  


     while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $trophées[] = new Trophée(
            $row["id"],
            $row["nom"],
            );
       }
     return  $trophées;

    }
 
}