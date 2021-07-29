<?php
if(isset($_GET['bouton'])
    && $_GET['bouton']==='calcul'){
    $montantTVA = $_POST['tauxTva'] * $_POST['prixHt'] / 100;
    $prixTtc = $montantTVA + $_POST['prixHt'];
    ?>
    Montant TVA : <?=$montantTVA?> <br>
    Montant TTC : <?=$prixTtc?> <br>
    <?php
}