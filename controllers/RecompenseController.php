<?php 


class RecompenseController {
    private RecompenseRepository $recompenseRepository;
    private TrophéeRepository $trophéeRepository;

    public function __construct (

        RecompenseRepository $r,
        TrophéeRepository $tr
    ) {

     $this-> recompenseRepository = $r ;
     $this-> trophéeRepository = $tr ;
    }

}