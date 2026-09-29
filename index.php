<?php

require_once "config/database.php";
require_once "autoload.php";

$effectifRepository = new EffectifRepository($pdo);
$joueurRepository = new JoueurRepository($pdo);
$recompenseRepository = new RecompenseRepository($pdo);
$tropheeRepository = new TrophéeRepository($pdo);
$positionRepository = new PositionRepository($pdo);

$controller = [
    new JoueurController(
    $effectifRepository,
    $joueurRepository,
    $positionRepository
   
 ),

 new RecompenseController(
    $recompenseRepository,
    $tropheeRepository
 )
];

$url = $_SERVER["REQUEST_URI"];
$projectUrl = "/mes_projets/PSG/";

$foot = str_replace($projectUrl, "", $url);

switch ($foot) {
    case 'joueurs':
        $controller[0]->createJoueur();
        break;

    case 'recompense':
        $controller[1]->createRecompense();
        break;

    case 'position':
        $controller[0]->createPosition();
        break;

    default:
        require_once "views/home.php";
        break;
}