<?php 


class RecompenseController {
    private RecompenseRepository $recompenseRepository;
    private TrophéeRepository $trophéeRepository;

    public function __construct (

        RecompenseRepository $r,
        TrophéeRepository $tr
    ) {

     $this->recompenseRepository = $r ;
     $this->trophéeRepository = $tr ;
    }

    public function createRecompense() 
    {
        $joueurs = $this->recompenseRepository->findAll(); 

        require_once "views/formrecompense.php";

    }
}