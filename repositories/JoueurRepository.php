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
                joueur.`poste secondaire`,
                joueur.`nationalité`,
                joueur.effectif_id
            FROM joueur;
        ";

        $stmt = $this->pdo->query($sql);

        $joueurs = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $joueurs[] = new Joueur(
                $row["id"],
                $row["prenom"],
                $row["nom"],
                $row["age"],
                $row["poste"],
                $row["poste secondaire"],
                $row["nationalité"],
                $row["effectif_id"]
            );
        }

        return $joueurs;
    }
}
