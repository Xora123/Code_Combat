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


