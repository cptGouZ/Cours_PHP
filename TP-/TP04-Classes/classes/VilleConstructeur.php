<?php


class VilleConstructeur
{
    private string $nom;
    private string $departement;
    public function __construct(string $nom, string $departement){
        $this->nom = $nom;
        $this->departement = $departement;
    }
    public function afficher(){
        echo "La ville {$this->nom} est dans le département {$this->departement}<br>";
    }
    public static function villeAvecLeNomLePlusLong(VilleSetter $ville1, VilleSetter $ville2){
        $villeLaPlusLongue = $ville1;
        if(strLen($ville2->getNom())>strLen($ville1->getNom()))
            $villeLaPlusLongue = $ville2;
        echo "La ville avec le nom le plus long est : {$villeLaPlusLongue->getNom()}<br>";
    }
}