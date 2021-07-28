<?php
//Permet le chargement automatique des fichiers
function fonctionAChargerAutomatiquement($nomClasseToInclude){
    include 'classes/'.$nomClasseToInclude.'.php';
}
spl_autoload_register('fonctionAChargerAutomatiquement');

$classeCharge = new ClasseACharger();
echo $classeCharge;