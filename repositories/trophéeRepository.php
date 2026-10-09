<?php

class TrophéeRepository
{
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

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $trophées[] = new Trophée(
                $row["id"],
                $row["nom"]
            );
        }

        return $trophées;
    }


    public function findById(int $id)
    {
        $sql = "
            SELECT * FROM trophée WHERE id=:id;
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "id" => $id
        ]);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $trophée = new Trophée(
                $row["id"],
                $row["nom"],

            );
        }
        return $trophée;
    }

}