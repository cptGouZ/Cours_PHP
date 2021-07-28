<?php echo 'Hello'.'World'; ?>
<div><?='Salut Anthony'?></div>
<?php
$_maVariable = '';
$autreVar02 = '';
$autreVar02 = 12;
//Copie en valeur
$autreVar01 = $autreVar02;
$autreVar02=15;
echo 'Var 01 : ' . $autreVar01 . ' - Var 02 : ' . $autreVar02 . '<br/>';
//Copie en référence grâce au & :
$autreVar01 = &$autreVar02;
$autreVar02 = 33;
echo 'Var 01 : ' . $autreVar01 . ' - Var 02 : ' . $autreVar02 . '<br/>';

var_dump($autreVar02); //Donne des infos sur une variables

//isset permet de tester l'existence d'une variable
$var='';
if(isset($var)){
    echo'$var existe <br>';
}else{
    echo'$var n\'existe pas <br>';
}

//empty
if(empty($var)){
    echo '$var est vide<br>';
}

//difference entre '' et ""
$uneVar='mon texte interprété';
echo 'voici $uneVar <br>';
echo "voici $uneVar <br>";
echo 'voici {$uneVar} <br>';
echo "voici {$uneVar} <br>";
echo 'voici ' . $uneVar . '<br>';

//Transtypage implicite
$x='1abc';
$y='abc1';
echo $x * 10 . "<br>";
echo $y * 10 . "<br>";

//cast explicit
settype($x, 'integer');
var_dump($x);
var_dump(is_numeric($y));

//cast
$z = (int)$x;
var_dump($z);

//constante
define('MA_CONST', 'php en version'. phpversion());
echo MA_CONST . '<br>';

const MA_CONSTANTE  = 42;
echo MA_CONSTANTE * 2 . '<br>';

if(defined('MA_CONST')){
    echo 'la constante existe <br>';
}

//Format de chaine
$chaine = 'Bienvenu à L\'EnI éColeInformAtique';
echo mb_strtoupper($chaine).'<br>';
echo mb_convert_case(mb_strtolower($chaine), MB_CASE_TITLE) .'<br>';
echo sprintf('%02d/%02d/%04d', 20,2,89) .'<br>';

$x = 1345.9873;
echo number_format($x) .'<br>';
echo number_format($x, 2) .'<br>';
echo number_format($x, 3,",", " ") .'<br>';

$mail = 'sylvain@mail.org';
$position = mb_strpos($mail, '@');
if($position === false) {
    echo 'le @n\'est pas présent' .'<br>';
}else{
    echo 'le @ est présent à la position ' . $position .'<br>';
}

//Date
$maDate = new DateTime();
$timeStamp = mktime(5,12,56,10,3,2021);
echo date('H:i:s') .'<br>';
echo date('d/m/y H:i:s', $timeStamp) .'<br>';
