<?php
$entier = 10;
$reel =10.52;
var_dump($entier);
var_dump($reel);
//Incrementation $entier++
var_dump($entier++); //++ se fait après l'utilisation de la variable
var_dump(++$entier); //++ se fait avant l'utilisation de la variable

//Concatenation
$texte = 'Bonjour';
$texte .= ' Marcel';
var_dump($texte);

//Operateur Comparaison
if(true === false){}
if(true !== false){}
switch ($entier){
    case 10 : true; break;
    default : false; break;
}

