<?php

class JoueurRepository
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
        $sql = "
            SELECT
                joueur.id,
                joueur.prenom,
                joueur.nom,
                joueur.age,
                joueur.poste,
                joueur.poste_secondaire,
                joueur.nationalité,
                joueur.effectif_id
            FROM joueur;
        ";

        $stmt = $this->pdo->query($sql);

        $joueurs = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $joueurs[] = new joueur(
                $row["id"],
                $row["prenom"],
                $row["nom"],
                $row["age"],
                $row["poste"],
                $row["poste_secondaire"],
                $row["nationalité"],
                $row["effectif_id"]
            );
        }

        return $joueurs;
    }


   public function findById(int $id)
    {
        $sql = "
            SELECT * FROM joueur WHERE id=:id;
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            "id" => $id
        ]);

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $joueur = new joueur(
                $row["id"],
                $row["prenom"],
                $row["nom"],
                $row["age"],
                $row["poste"],
                $row["poste_secondaire"],
                $row["nationalité"],
                $row["effectif_id"]
            );
        }
        return $joueur;
    }

}
