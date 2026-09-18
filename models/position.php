<?php

class position {

    public $id;
    public $nom;
    public $nom_secondaire;
    public $position_effectif;

    public function __construct($i, $no, $ns, $pe) {
        $this-> id = $i;
        $this-> nom = $no;
        $this-> nom_secondaire = $ns;
        $this-> position_effectif = $pe;
    }
}