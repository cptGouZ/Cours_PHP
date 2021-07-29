<?php
echo 'Liste des paramètre en $_GET';
var_dump($_GET);

echo 'Liste des paramètre en $_POST';
var_dump($_POST);

echo 'Liste des paramètre en $_REQUEST (GET + POST)';
var_dump($_REQUEST);

echo 'Liste des paramètre en $_GET';
var_dump($_FILES);


//Filtre anti script ou injection JS/HTML
echo 'Filtres sur une variable PHP'.'<br>';
$var = $_POST['nom'];
echo filter_var($var,FILTER_SANITIZE_STRING).'<br>';
echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS).'<br>';
echo filter_input(INPUT_POST,'nom',FILTER_SANITIZE_STRING).'</p>';
echo filter_input(INPUT_GET,'nom2',FILTER_SANITIZE_STRING).'</p>';

//Traitement tableau
var_dump($_POST['saisie']);
var_dump(filter_var_array($_POST['saisie'],FILTER_SANITIZE_STRING));
var_dump(filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING));