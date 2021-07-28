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
function triangeDePascal(int $nbIteration): array{
    $triangle = [[1]];
    for($i=0;$i<$nbIteration; $i++){
        array_push($triangle, calculLigneDePascal( $triangle[count($triangle)-1] ));
    }
    return $triangle;
}
function calculLigneDePascal(array $lignePrecedente): array{
    $triangle = [];
    array_push($triangle, 1);
    for($i=1; $i<count($lignePrecedente); $i++){
        array_push($triangle, $lignePrecedente[$i]+$lignePrecedente[$i-1]);
    }
    array_push($triangle, 1);
    return $triangle;
}
$resultat = triangeDePascal(10);
var_dump( $resultat);