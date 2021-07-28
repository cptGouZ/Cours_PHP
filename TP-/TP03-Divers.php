<?php
echo '<h3>Nb de tirage</h3>';
function tirage(int $nbAChercher): ?int{
    if($nbAChercher>1000){
        return null;
    }else{
        $nbEssai = 0;
        do{
            $nbTire = mt_rand(0,1000);
            $nbEssai++;
        }while($nbTire !== $nbAChercher);
    }
    return $nbEssai;
}
echo tirage(402).'<br>';


echo '<h3>Tri 2 nombre</h3>';
function desc(int $nb1, int $nb2){
    echo "Les valeurs comparées sont : $nb1 et $nb2";
    $reverse = $nb1>$nb2;
    switch($reverse){
        case true : echo "$nb1 est supérieur à $nb2<br>"; break;
        case false : echo "$nb2 est supérieur à $nb1<br>"; break;
    }
}
desc(3,5);


echo '<h3>PGCD</h3>';
function pgcd(int $val1, int $val2) :int{
    while($val2 !==0){
        $t=$val2;
        $val2 = $val1%$val2;
        $val1 = $t;
    }
    return $val1;
}
echo 'Le pgcd entre 42 et 21 est : ' . pgcd(180,525) . '<br>';


echo '<h3>Triangle de pascal</h3>';
function triangeDePascal($nbIteration){
    $triangle = [1];
    echo count($triangle);
    for($lig=1;$lig<=$nbIteration; $lig++){
        $ligne = [1];
        for($col=1; $col<count($triangle); $col++) {
            $ligne [$col] = $triangle[$lig-1][$col-1] + $triangle[$lig-1][$col];
        }
        $ligne [] =1;
        $triangle [] = $ligne;
    }
    return $triangle;
}
$resultat = triangeDePascal(5);
var_dump( $resultat);