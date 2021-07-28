<?php
include_once '../NameSpace/Utilisateur.php';
$var = ['a', 'index' => 'trois', true, 7.5];
$serial = serialize($var);

var_dump($serial);
var_dump(unserialize($serial));

var_dump(serialize(new \com_classes\Utilisateur('rez','sdf')));
//Les méthodes __sleep() et __wakeup() permettent un traitement lors de la serialisation et la désérialisation des objets.
//Par exemple exclure de attributs ou encoder des mots de passes dans la sérialisation