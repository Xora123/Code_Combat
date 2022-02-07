<?php

require 'classe/Autoloader.php';
Autoloader::register();

$hero = new personnage("hero");

$hero->vie = 200;
$hero->atk = 15;
$hero->armure = 0;



echo '<pre>';

echo 'L amure de votre héro est de ' .  $hero->armure;

echo '</pre>';

echo '<pre>';

echo 'Votre héro reçoit le bonus d armure ';

echo '</pre>';

$hero->bonus_armure(20);


echo '<pre>';
echo 'L armure de votre héro est maintenant de ' . $hero->armure;
echo '</pre>';