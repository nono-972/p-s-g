<?php

require_once "../config/database.php";
require_once "../autoload.php";

$effectifRepository = new EffectifRepository($pdo);
$joueurRepository = new JoueurRepository($pdo);
$recompenseRepository = new RecompenseRepository($pdo);
$tropheeRepository = new TrophéeRepository($pdo);

$recompenseController = new RecompenseController(
    $recompenseRepository,
    $tropheeRepository
);

$joueurController = new JoueurController(
    $effectifRepository,
    $joueurRepository
);
