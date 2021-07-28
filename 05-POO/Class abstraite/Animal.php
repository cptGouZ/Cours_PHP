<?php


abstract class Animal
{
    private string $espece;
    public function __construct($espece){
        $this->espece = $espece;
    }

    public function __toString(){
        return "Je suis un {$this->espece} <br>";
    }
    public abstract function mange();
}