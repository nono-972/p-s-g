<?php

require_once "../config/database.php";
require_once "../autoload.php";

$effectifRepository=(new EffectifRepository($pdo));
$joueurRepository=(new JoueurRepository($pdo));
$recompenseRepository=(new RecompenseRepository($pdo));
$tropheeRepository=(new TrophéeRepository($pdo));

$controller = new RecompenseController($recompenseRepository, $tropheeRepository);
$controller = new JoueurController($joueurRepository, $effectifRepository);
