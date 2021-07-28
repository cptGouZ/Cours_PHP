<?php
include_once 'Animal.php';

class Carnivore extends Animal
{
    public function mange(){
        echo "Je mange de la viande <br>";
    }
}