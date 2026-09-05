<?php

class recompense {

    public $id;
    public $nom;
    public $annee;
    public $trophée_id;

    public function __construct($i, $n, $a, $t) {
        $this-> id = $i;
        $this-> nom = $n;
        $this-> annee = $a;
        $this-> trophée_id = $t;
    }
}