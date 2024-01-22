<?php

class Personne {
    private $nom;
    private $prenom;
    private $dateNaissance;

    // Constructeur
    public function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    // Méthode pour calculer l'âge
    public function calculerAge() {
        $aujourdHui = new DateTime();
        $dateNaissance = new DateTime($this->dateNaissance);
        $difference = $aujourdHui->diff($dateNaissance);
        return $difference->y; // Récupérer l'année de la différence
    }

    // Méthode pour afficher les informations
    public function afficherInformations() {
        $age = $this->calculerAge();
        echo "Nom: " . $this->nom . "<br>";
        echo "Prénom: " . $this->prenom . "<br>";
        echo "Âge: " . $age . " ans<br>";
        echo "<br>";
    }
}

// Instanciation de deux personnes
$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

// Affichage des informations
$p1->afficherInformations();
$p2->afficherInformations();

?>
