<?php
//FILTER_SANITIZE_* : Filtre de nettoyage, nettoye les données des éventuelles injection possibles
//FILTER_VALIDATE_* : Filtre de validation, valide les données contenues dans la variable. validation ? valeur : null

$chaine = '<script>Mon script JS avec des "doubles quotes" et des \'simples quotes\'</script>';
$tableau=[];
$tableau[] = "jean";
echo filter_var($chaine, FILTER_SANITIZE_STRING).'<br>';
echo filter_var($chaine, FILTER_SANITIZE_SPECIAL_CHARS).'<br>';
echo filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING).'<br>';
var_dump($tableau);
echo filter_var_array($tableau,FILTER_SANITIZE_SPECIAL_CHARS);