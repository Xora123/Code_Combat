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

function Combat()
{

    $hero = new personnage("hero");

    $hero->vie = 200;
    $hero->atk = 15;
    $hero->armure = 0;

    $chef_minion = new personnage("chef_minion");

    $chef_minion->vie = 100;
    $chef_minion->atk = 100;
    $chef_minion->armure = 0;

    for ($i = 1; $i <= 5; $i++) {

        echo '<br>';
        echo "round($i)";
        echo '<br>';

        if ($hero->vie <= 0 || $chef_minion->vie <= 0) {
            if ($hero->vie <= 0) {
                echo 'votre hero est mort :(';
            }
            if ($chef_minion->vie <= 0) {
                echo 'Bien jouer le chef Minion est mort';
            }
            break;
        }


        $shuffle_vie = rand(0, 2);

        if ($shuffle_vie == 1) {
            echo "Votre hero recoit le bonus de vie! ";
            echo '<br>';
            $hero->bonus_vie(50);
        }

        $shuffle_armure = rand(0, 4);

        if ($shuffle_armure == 1) {
            echo "Votre hero recoit le bonus d'armure! ";
            echo '<br>';
            $hero->bonus_armure(20);
        }

        echo "La vie du héro est de : " .  $hero->vie . " et son armure est de " . $hero->armure;
        echo '<br>';
        echo  "La vie du chef minion est de :  " . $chef_minion->vie;
        echo '<br>';

        echo '<br>';
        echo 'Votre héro attaque le chef minion ! ';
        $hero->attaque($chef_minion);
        echo '<br>';
        echo 'Le chef minion attaque votre héro!  ';
        $chef_minion->attaque($hero);
        echo '<br>';
    }
}

combat();
