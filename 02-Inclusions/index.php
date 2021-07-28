<?php
//include génère un warning en cas de fichier manquant mais le script continue
//require génère une Fatal Error en cas de fichier manquant et arrête le script
include './inclusion.php';
include './inconnu.php';
echo "$prenom $nom";

require './inclusion2.php';
require './inconnu.php';
echo "$prenom1 $nom1";

//include_once et required_once permettent d'assurer le chargement qu'une seule fois du fichier
// sur toute la chaîne d'inclusion