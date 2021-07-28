<?php
//tableau
$tab1 = [12,'un',['deux',99]];
$tab1[] = 33;
$tab1[2][] = 55;
array_push($tab1, 25, 11);
//php7.4 et 8 fusion de tableaux
$tab1 = ['debut',0, ...$tab1, 'fin'];

var_dump($tab1);

//map
$tab2 = [];
$tab2['key'] = 'value';
var_dump($tab2);

//Renommage index
$alain = ['Alain', 'Germain', 37];
$laurent = ['Laurent', 'Bouvet', 47];
$personnes [0] = $alain;
$personnes [1] = $laurent;
$personnes = ['Alain' =>
    ['Alain', 'Germain', 38],
    'Laurent' =>
        ['Laurent', 'Bouvet', 47]];
var_dump($personnes);

//Manipulation
$couleurs = ['bleu', 'vert', 'rouge'];
$chaine = implode("|" , $couleurs);
var_dump(implode("|" , $couleurs));
var_dump(explode('|', $chaine));

foreach ($couleurs as $item) {
    echo $item;
    echo '<br>';
}
foreach ($couleurs as $key => $uneCouleur){
    echo $key . ' - ' . $uneCouleur;
    echo '<br>';
}