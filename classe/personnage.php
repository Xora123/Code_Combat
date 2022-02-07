<?php

class Personnage
{

    public $nom;
    public $vie;
    public $atk;
    public $armure;

    public function bobo(){
        $this->bonus= 50;
    }

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function bonus_vie($vie =null)
    {
        if (is_null($vie)){

            $this->vie = 200;
        }
        else{
        $this->vie += $vie;
        }
    }
    public function bonus_armure($armure = null)
    {
        if (is_null($armure)){

            $this->armure = 0;
        }
        else{
        $this->armure += $armure;
        }
    }

    public function mort(){
        
        return $this->vie <= 0;
    }

    public function attaque($cible){

      $cible->vie -= $this->atk;
    }
}
