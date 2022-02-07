<?php

require 'classe/Autoloader.php';
Autoloader::register();

$hero = new personnage("hero");

$hero->vie = 200;
$hero->atk = 15;
$hero->armure = 0;

$minion = new personnage("minion");

$minion->vie = 10;
$minion->atk = 10;
$minion->armure = 0;



echo '<pre>';

echo 'La vie de votre héro est de ' .  $hero->vie;

echo '</pre>';

echo '<pre>';

echo 'Votre héro se fait attaquer par un minion ';

echo '</pre>';

$minion->attaque($hero);

echo '<pre>';
echo 'La vie de votre héro est maintenant de ' . $hero->vie;
echo '</pre>';