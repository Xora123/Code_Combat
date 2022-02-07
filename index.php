<?php

require 'classe/Autoloader.php';
Autoloader::register(); 

$hero = new personnage("hero");


$hero->vie = 200;
$hero->atk = 15;
$hero->armure=0;
$hero->bonus_vie();
$hero->bonus_armure();

$minion = new personnage("minion");


$minion->vie = 10;
$minion->atk = 10;
$minion->armure=0;

$lieutenant_minion = new personnage("lieutenant_minion");


$lieutenant_minion->vie = 30;
$lieutenant_minion->atk = 30;
$lieutenant_minion->armure=0;

$chef_minion= new personnage("chef_minion");


$chef_minion->vie = 100;
$chef_minion->atk = 100;
$chef_minion->armure=0;

echo '<pre>';
var_export($hero);

var_export($minion);

var_export($lieutenant_minion);

var_export($chef_minion);

echo '</pre>';