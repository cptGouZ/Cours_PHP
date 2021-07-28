<?php
require_once './Heritage/Utilisateur.php';
require_once './Heritage/UtilisateurAvecCouleur.php';
require_once './Class abstraite/Carnivore.php';
require_once './Class abstraite/Vegetarien.php';
require_once './MethodesDeClasse/AttrEtMethDeClasse.php';
require_once 'GroupementDeMethodes.php';
require_once './Interface/Valeur.php';

$user = new Utilisateur('Bouvet');
$user2 = new Utilisateur('Gazeau', 'Julien');
echo $user->informations();
echo $user2;

$user3 = new UtilisateurAvecCouleur('Gazeau Rousseau', 'Jacques', 'Blanc');
echo $user3->informations();

echo AttrEtMethDeClasse::prixTtc(40).'<br>';

$lion = new Carnivore('lion');
$lapin = new Vegetarien('lapin');

function afficher(Animal $animal){
    echo $animal->mange();
}
afficher($lapin);
afficher($lion);

echo "est un animal ". var_dump(is_a($lion, Animal::class)) .'<br>';
echo "est un carnivore ". var_dump($lion instanceof Carnivore) .'<br>';
echo "est un vegetarien ". var_dump($lion instanceof Vegetarien) .'<br>';

$val = new Valeur();
try {
    $val->set(-10);
}catch(MonException $e){
    $e->getTrace();
}
