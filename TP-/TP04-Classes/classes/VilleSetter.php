<?php


class VilleSetter
{
    private string $nom;
    private string $departement;
    public function afficher(){
        echo "La ville {$this->nom} est dans le département {$this->departement}";
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @param string $departement
     */
    public function setDepartement(string $departement): void
    {
        $this->departement = $departement;
    }
}