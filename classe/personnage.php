<?php

class Personnage
{

    public $nom;
    public $vie;
    public $atk;
    public $armure;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function bonus_vie()
    {

        $this->vie = 50;
    }
    public function bonus_armure()
    {

        $this->armure = 20;
    }
}
