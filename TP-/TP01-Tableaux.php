<?php
$personnes = ['DUPONT' =>
                    ['prenom' => 'Gérard',
                     'ville' => 'Paris',
                     'age' => 67],
              'BADIN' =>
                    ['prenom' => 'Aurélie',
                     'ville' => 'Nantes',
                     'age' => 31]
             ];

echo '<ul>';
    foreach ($personnes as $key => $personne){
        echo "<li>
                    $key
                    <ul>
                        <li>Prénom : $personne[prenom]</li>
                        <li>VilleSetter : $personne[ville]</li>
                        <li>Age : $personne[age]</li>
                    </ul>
              </li>";
    }
echo '</ul>';



$mails = [
    'julien@gmail.com',
    'jean@gmail.com',
    'marcel@orange.fr',
    'olivier@yahoo.fr',
    'laurent@sfr.com',
    'caroline@free.fr',
    'renaud@free.fr',
    'red@orange.fr',
    'thibault@sfr.com'
];
$domaines = [];
foreach ($mails as $mail){
    //$posArobase = strpos($mail, '@')+1;
    //$domaine = substr($mail, $posArobase);
    $domaine = explode('@', $mail)[1];

    //if(!array_key_exists($domaine, $domaines))
    if(!isset($domaines[$mail])) $domaines+=[$domaine=>0];
    $domaines[$domaine]++;
}

echo 'Répartition des mails par hébergeur';
foreach ($domaines as $domaine => $count){
    echo"
    <ul>
        $domaine : " . $count/array_sum($domaines)*100 . "%
        $domaine : " . number_format($count/sizeof($mails)*100,2) . "%
    </ul>
    ";
}
