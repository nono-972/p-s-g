<?php 


class JoueurController {
    private EffectifRepository $effectifRepository;
    private JoueurRepository $joueurRepository;
    private PositionRepository $positionRepository;

    public function __construct (
     EffectifRepository $ef,
     JoueurRepository $j,
     PositionRepository $pr

    ){
     $this->effectifRepository = $ef ;
     $this->joueurRepository = $j ;
     $this->positionRepository = $pr ;

    }

        public function createJoueur() : void
    {
        $joueurs = $this->joueurRepository->findAll(); 

        require_once "views/formjoueur.php";
    }

    
    public function createPosition()
    {
        $positions = $this->positionRepository->findAll(); 

        require_once "views/formposte.php";

    }

}