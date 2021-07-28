<?php


class Client extends Personne
{
    private string $adresse;
    public function setCoord(string $adresse){
        $this->adresse = $adresse;
    }
    public function __toString(){
        return "{$this->nom} {$this->prenom} habite à {$this->adresse}";
    }
}