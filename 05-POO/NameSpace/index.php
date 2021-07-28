<?php
require_once '../Heritage/Utilisateur.php';
require_once 'Utilisateur.php';
use com_classes\Utilisateur as User;
echo $u = new Utilisateur('test', 'prenom');
echo $u = new User('test', 'prenom');