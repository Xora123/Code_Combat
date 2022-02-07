<?php

require 'classe/Autoloader.php';
Autoloader::register();

$hero = new personnage("hero");

$hero->vie = 200;
$hero->atk = 15;
$hero->armure = 0;

$chef_minion = new personnage("chef_minion");

$chef_minion->vie = 100;
$chef_minion->atk = 100;
$chef_minion->armure = 0;




$shuffle_vie = rand(0, 2);

if ($shuffle_vie == 1) {
    $hero->bonus_vie(50);
}

$shuffle_armure = rand(0, 4);

if ($shuffle_armure == 1) {
    $hero->bonus_armure(20);
}

echo '<pre>';

echo 'Votre héro possède: ' . $hero->vie . ' de vie et ' . $hero->armure . ' d armure';

echo '</pre>';

$chef_minion->attaque($hero);

echo '<pre>';

echo 'Votre héro possède maintenant: ' . $hero->vie . ' de vie et ' . $hero->armure . ' d armure <br>'; 

echo 'Le chef minion possède  ' . $chef_minion->vie . ' de vie et ' . $chef_minion->armure . ' d armure';
echo '</pre>';
