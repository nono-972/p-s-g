<?php 


class JoueurController {
    private EffectifRepository $effectifRepository;
    private JoueurRepository $joueurRepository;

    public function __construct (
     EffectifRepository $ef,
     JoueurRepository $j

    ){
     $this->effectifRepository = $ef ;
     $this->joueurRepository = $j ;
    }

}