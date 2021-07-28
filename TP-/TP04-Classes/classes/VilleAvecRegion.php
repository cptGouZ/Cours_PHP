<?php


class VilleAvecRegion extends VilleSetter
{
    private string $region;
    public function afficher()
    {
        return parent::afficher() . " de la région {$this->region}";
    }
    public function setRegion(string $region): void
    {
        $this->region = $region;
    }
}