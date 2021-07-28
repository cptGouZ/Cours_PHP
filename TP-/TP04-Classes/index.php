<?php
function loadClass($nomClasse){
    include 'classes/'.$nomClasse.'.php';
}
spl_autoload_register('loadClass');
echo '<h3>Afficher une ville et son département par setter</h3>';
$villeSetter = new VilleSetter();
$villeSetter->setDepartement(22);;
$villeSetter->setNom('Ploumanac`\'h');
echo $villeSetter->afficher().'<br>';


echo '<h3>Afficher une ville et son département par constructeur</h3>';
$villeConstructeur = new VilleConstructeur('Nantes', 44);
echo $villeConstructeur->afficher().'<br>';


echo '<h3>Afficher une ville et son département ainsi que sa région par setter</h3>';
$villeRegion = new VilleAvecRegion();
$villeRegion->setNom('Nantes');
$villeRegion->setDepartement(44);
$villeRegion->setRegion('Pays de la Loire ET PAS Bretagne !');
echo $villeRegion->afficher().'<br>';


echo '<h3>Afficher le nom de ville le plus long</h3>';
VilleConstructeur::villeAvecLeNomLePlusLong($villeSetter, $villeRegion);


echo '<h3>Un formulaire</h3>';
$form = new FormPlus();
$form->setText('nom', 'classe', 'id', 'label');
$form->setText('nom1', 'classe1', 'id1', 'label1');
$form->setRadio('radio', 'classe1', 'id3', 'label1');
$form->setRadio('radio', 'classe1', 'id4', 'label1');
$form->setSubmit('nom2', 'classe2', 'id2', 'label2');
echo $form->getForm();