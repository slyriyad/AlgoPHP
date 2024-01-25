<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.
v1 ➔ "Peugeot","408",5
v2 ➔ "Citroën","C4",3
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
suivants :
</p>

<h2>Resultat</h2>

<?php

class Voiture {
    private string $marque;
    private string $modèle;
    private int $nbPortes;
    private int $vitesseActuelle;
    

    public function __construct(string $marque,string $modèle,string $nbPortes,string $vitesseActuelle)
    {
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->nbPortes = new int($nbPortes);
        $this->vitesseActuelle =  new int($vitesseActuelle);
        $this-> vitesseInitial($vitesseActuelle);
    }

    private function vitesseInitial($vitesseActuelle) {
        $vitesseActuelle = 0;
    }
    
    
    public function getMarque()
    {
        return $this->marque;
    }

    
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    

    public function getModèle()
    {
        return $this->modèle;
    }

    
    public function setModèle($modèle)
    {
        $this->modèle = $modèle;

        return $this;
    }

   

    public function getNbPortes()
    {
        return $this->nbPortes;
    }

   
    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }


   
    public function getVitesseActuelle()
    {
        return $this->vitesseActuelle;
    }

    
    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }


    public function demarrer()
    {
        $this->vitesseActuelle ;

        return $this;
    }
    

    public function accelerer()
    {
        $this->vitesseActuelle ;

        return $this;
    }
    

    public function stopper()
    {
        $this->vitesseActuelle ;

        return $this;
    }
}