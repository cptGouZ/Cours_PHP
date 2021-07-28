<?php
echo '<h3>Mettre la première lettre de chaque mot en majuscule</h3>';
$chaine = 'bOnJoUr, jE sUiS UnE pHrAsE pOuR tEsTeR';
$listeMots = explode(" ", $chaine);
foreach ($listeMots as $key=>$mot){
    $listeMots[$key] = ucwords(mb_strtolower($mot));
}
echo(implode(" ", $listeMots)).'<br>';

echo(ucwords(mb_strtolower($chaine)));


echo '<h3>Aligner nom et prénom sur 20 charactères</h3>';
$prenom = 'Julien';
$nom = 'GAZEAU';
echo "<pre>". sprintf('[%-15s]', $prenom) . sprintf('[%-15s]', $nom) ."</pre>";

echo '<h3>Tri du tableau par ordre naturel</h3>';
$tab = ['1abc', '10ghi', '2def' ];
sort($tab,SORT_NATURAL);
var_dump($tab);


echo '<h3>Mon age</h3>';
$naissance = mktime(20,45,59,3,4,1987);
$maintenant = new DateTime();
echo date_timestamp_get($maintenant)-$naissance.'<br>';


echo '<h3>Noel</h3>';
$noel = mktime(0,0,0,12,25,2017);
setlocale(LC_TIME, 'fr_FR', 'French');
echo strftime('%A', $noel).'<br>';

echo '<h3>Premier mai</h3>';
for($i=2018; $i<=2037; $i++){
    $premiermai = mktime(0,0,0,12,25,$i);
    $jourSemaine = Date('N',$premiermai);
    echo strftime("En $i le premier mai sera un %A => ", $premiermai);
    switch($jourSemaine){
        case 1 :
        case 5 :
            echo 'On part!' .'<br>';
            break;
        case 6 :
        case 7 :
            echo 'Dommage!' .'<br>';
            break;
        default :
            echo 'Gros Dodo' .'<br>';
            break;
    }
}

echo '<h3>Paques</h3>';
for($i=2018; $i<=2037; $i++){
    $paques = easter_date($i);
    $ascension = $paques + 39*24*60*60;
    echo date('d/m/Y', $ascension).'<br>';
}