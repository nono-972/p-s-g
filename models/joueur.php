<?php

class joueur {

    public $id;
    public $nom;
    public $prenom;
    public $age;
    public $poste;
    public $poste_secondaire;
    public $nationalité;
    public $effectif_id;

    public function __construct($i, $n, $p, $a, $po, $ps, $nat, $e) {
        $this-> id = $i;
        $this-> nom = $n;
        $this-> prenom = $p;
        $this-> age = $a;
        $this-> poste = $po;
        $this-> poste_secondaire = $ps;
        $this-> nationalité = $nat;
        $this-> effectif_id = $e;
    }
}