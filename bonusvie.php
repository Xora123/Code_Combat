<?php

require 'classe/Autoloader.php';
Autoloader::register();

$hero = new personnage("hero");

$hero->vie = 200;
$hero->atk = 15;
$hero->armure = 0;

$hero->bonus_armure();

echo '<pre>';

echo 'La vie de votre héro est de ' .  $hero->vie;

echo '</pre>';

echo '<pre>';

echo 'Votre héro reçoit le bonus de vie ';

echo '</pre>';
$hero->bonus_vie(50);


echo '<pre>';
echo 'La vie de votre héro est maintenant de ' . $hero->vie;
echo '</pre>';