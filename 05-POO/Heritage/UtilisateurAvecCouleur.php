<?php
include_once 'Utilisateur.php';

class UtilisateurAvecCouleur extends Utilisateur
{
    private string $couleur;
    public function __construct(string $nom, ?string $prenom, string $couleur) {
        $this->couleur = $couleur;
        parent::__construct($nom, $prenom);
    }

    /**
     * @return string
     */
    public function getCouleur(): string {
        return $this->couleur;
    }

    public function informations()
    {
        return parent::informations()."Couleur: {$this ->couleur}<br>";
    }
}