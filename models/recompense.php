<?php

class recompense {

    public $id;
    public $nom;
    public $annee;
    public $trophée_id;

    public function __construct($i, $nom, $a, $t) {
        $this-> id = $i;
        $this-> nom = $nom;
        $this-> annee = $a;
        $this-> trophée_id = $t;
    }
}