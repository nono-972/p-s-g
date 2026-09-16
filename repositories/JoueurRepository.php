<?php

class JoueurRepository{
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
                joueur.poste secondaire,
                joueur.nationalité,
                joueur.effectif_id
            FROM joueur;
        ";

        $stmt = $this->pdo->query($sql);
 
     $joueurs = [];  

    }

}