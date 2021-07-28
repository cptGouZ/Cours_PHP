<?php
function sommeNonType($val1, $val2){
    return $val1 + $val2;
}
$v=12;
echo "La somme de {$v} et 35 est " . sommeNonType($v,35) . "<br>";

//PHP 7.1 : Le ? devant float permet de rendre le retour nullable
//Valeur par défaut possible
function divisionTypé(int $val1, int $val2 = 3): ?float{
    if($val2===0){
        return null;
    }
    return $val1/$val2;
}
$v=12;
echo "La divion de {$v} par 3 est " . divisionTypé($v) . "<br>";

//Variable static
function statique(){
    $variable = 0;
    static $vStatique = 0;

    $variable++;
    $vStatique++;

    echo "Variable : $variable <br>";
    echo "Variable statique : $vStatique <br>";
}
statique();
statique();

//Identique delegate / callback
$sommeNonType = 'sommeNonType';
echo ucfirst($sommeNonType) . ' : 2 + 2 = ' . sommeNonType(2,2) .'<br>';
echo 'sommeNonType'(15,5);

//Fonction en callback
function operation(int $val1, int $val2, $fonctionName){
    if(is_string($fonctionName) && !function_exists($fonctionName)){
        $retour = 'La fonction n\'existe pas';
    }else{
        $retour = $fonctionName($val1, $val2);
    }
    return $retour;
}
echo operation(2,3, 'divisionTypé') . '<br>';

//Fonction anonyme
echo operation(2,3, function($val1, $val2){
        return $val1. ' ' .$val2;
    }) . '<br>';
//PHP 7.4
$fn = fn($a, $b) => $a + $b;
echo $fn(12,8).'<br>';

//Variables globales
$globale = 6589;
function util(){
    global $globale;
    echo 'valeur de la variable globale : ' .$globale.'<br>';
    $globale++;
}
util();
echo 'valeur de la variable globale : ' .$globale.'<br>';

$GLOBALS['dansTableauGlobal'] = 'autre variable global dans le tableau GLOBALS';
echo $dansTableauGlobal;