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

      if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $age = $_POST["age"];
        $poste = $_POST["poste"];
        $poste_secondaire = $_POST["poste_secondaire"];
        $nationalité = $_POST["nationalité"];
        $effectif_id = $_POST["effectif"];

        $joueur = new joueur(
          0,
          $nom,
          $prenom,
          $age,
          $poste,
          $poste_secondaire, 
          $nationalité,  
          $effectif_id
        );
      }
        $this->joueurRepository->create($joueurs);
        header("location: index.php");
        exit;
      
      require __DIR__ . "/views/formJoueur.php";
    }

    
    public function createPosition() : void
    {
        $positions = $this->positionRepository->findAll(); 

        require_once "views/formposte.php";

    }

}