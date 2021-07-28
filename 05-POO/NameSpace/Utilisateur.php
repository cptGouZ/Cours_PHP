<?php
namespace com_classes;

/**
 * Class Utilisateur
 */
class Utilisateur
{
    //La portée par défaut est publique. A vérifier
    private $nom;
    //PHP 7.4 typage des attributs
    //? devant le type est une variable nullable
    protected ?string $prenom;

    //methode magique

    /**
     * Utilisateur constructor.
     * @param string $nom
     * @param string|null $prenom
     */
    public function __construct(string $nom, ?string $prenom ='Jojo'){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __destruct() {
        echo "<p>suppression de {$this->nom}</p>";
    }

    public function __toString() {
        return "<p>Je suis nouvel utilisateur $this->prenom $this->nom</p>";
    }

    public function informations(){
        return "Nom : $this->nom<br>Prenom : $this->prenom<br>";
    }
}