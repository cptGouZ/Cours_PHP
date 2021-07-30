<?php
require_once 'dao/connexion.php';
//region Sans requête préparée (le fetch ou fetch all consomme la requête)
//Récupération multilignes
$query = $pdo->query('SELECT * FROM stagiaires');
$stagiaires = $query->fetchAll();
var_dump($stagiaires);

//Récupération ligne unique
$query = $pdo->query('SELECT * FROM stagiaires');
$stagiaire = $query->fetch();
var_dump($stagiaire);


//INSERT UPDATE DELETE
$rowcount = $pdo->exec("INSERT INTO stagiaires (nom, prenom, promotion) VALUES ('GAZEAU', 'Julien', 'CDA085')");
echo "Nombre de lignes modifiées : {$rowcount} <br>";
echo "L'id ajouté est : {$pdo->lastInsertId()}";
//endregion

//region Requête préparée
//SELECT
$id=5;
$prepared = $pdo->prepare('SELECT * FROM stagiaires WHERE id = ?');
$prepared->bindValue(1, $id);
$prepared->execute();
$stagiaire = $prepared->fetch();
var_dump($stagiaire);

//INSERT UPDATE DELETE
$prepared = $pdo->prepare ("INSERT INTO stagiaires (nom, prenom, promotion) VALUES (:nom, :prenom, :promotion)");
$prepared->bindValue(':nom', 'CANEL');
$prepared->bindValue(':prenom', 'Anthony');
$prepared->bindValue(':promotion', 'CDA085');
$rowcount = $prepared->execute();
echo "Nombre de lignes modifiées : {$rowcount} <br>";
echo "L'id ajouté est : {$pdo->lastInsertId()}";

//bindValue la valeur de la variable n'est évalué qu'au moment du bind value
//bindParam réévalue la valeur d'une variable à chaque lancement de la requête
$nom = 'a';
$prepared = $pdo->prepare ("INSERT INTO stagiaires (nom, prenom, promotion) VALUES (:nom, :prenom, :promotion)");
$prepared->bindValue(':nom', $nom);
$prepared->bindParam(':prenom', $nom);
$prepared->bindValue(':promotion', 'CDA085');
$nom = 'b';

$rowcount = $prepared->execute();
//endregion

//region Multiples Requetes
$requete = $pdo->query('SELECT * FROM modeles;
                                  SELECT * FROM voitures;');
//Boucles permettant de parcourir tous les "SELECT" fait dans la requête
do{
    $resultat = $requete->fetchAll();
    var_dump($resultat );
}while($requete->nextRowset());
//endregion
