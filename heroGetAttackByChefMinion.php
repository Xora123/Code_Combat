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



echo '<pre>';

echo 'La vie de votre héro est de ' .  $hero->vie;

echo '</pre>';

echo '<pre>';

echo 'Votre héro récupere le bonus d armure ';

echo '</pre>';

$hero->bonus_armure(20);
echo '<pre>';

echo 'Votre héro possède maintenant: ' . $hero->vie . ' de vie et ' . $hero->armure . ' d armure';

echo '</pre>';

echo '<pre>';

echo 'Votre héro se fait attaquer par un Chef_minion ';

echo '</pre>';

$chef_minion->attaque($hero);

echo '<pre>';
echo 'La vie de votre héro est maintenant de ' . $hero->vie+ $hero->armure;
echo '</pre>';