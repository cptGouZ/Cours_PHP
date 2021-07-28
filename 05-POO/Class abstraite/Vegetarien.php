<?php
include_once 'Animal.php';

class Vegetarien extends Animal
{
    public function mange(){
        echo"Je mange des fruits <br>";
    }
}