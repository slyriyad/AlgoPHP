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
    private int $vitesseActuelle = 0;
    private int $statut = 0;
    private int $idVoiture;
    
    private static $_nbVehicules = 1;



    public function __construct(string $marque,string $modèle,string $nbPortes,int $idVoiture)
    {
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->nbPortes = $nbPortes;
        $this->idVoiture = self::$_nbPostes;
        self::$_nbPostes++; 
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

    public static function numVehicule(){//méthode statique
        self::$_nbPostes;
    }

    public function demarrer()
    {
        if($this->statut == 0) {
            $this->statut = 1;
            $resultat = " démarre";
        } else {
            $resultat = " est déjà démarré";
        }
        echo "Le véhicule ".$this->marque." ".$this->modèle."$resultat<br>" ;
    }
    

    public function accelerer(int $vitesse)
    {
        if($this->statut == 0) {
            $result = " veut accélerer de $vitesse<br> Pour accélerer, il faut démarrer le vehiule".$this->marque." ".$this->modèle;
        } else {
            $this->vitesseActuelle += $vitesse;
            $result = "accélère de $vitesse" ;
        }
        echo "Le véhicule ".$this->marque." ".$this->modèle." $result km / h<br>" ;
    }
    

    public function stopper()
    {
        if($this->statut == 1) {
            $resultat = $this->statut = 0;
            $resultat = " s'eteint";
        } else {
            $resultat = " est déjà eteint";
        }
        echo "Le véhicule ".$this->marque." ".$this->modèle."$resultat<br>" ;
    }

    public function ralentir(int $vitesse)
    {
        if($this->statut == 0) {
            $result = " veut accélerer de $vitesse<br> Pour accélerer, il faut démarrer le vehiule".$this->marque." ".$this->modèle;
        } else {
            $this->vitesseActuelle -= $vitesse;
            $result = "ralenti de $vitesse" ;
        }
        echo "Le véhicule ".$this->marque." ".$this->modèle." $result km / h<br<" ;
    }

    public function afficherVitesse() {
        echo "La vitesse du véhicule ".$this->marque." ". $this->modèle ." est de : ".$this->vitesseActuelle." km / h<br>" ;
    }

}

$peugeot = new Voiture ("Peugeot","123","25");
$peugeot->demarrer();
$peugeot->stopper();
$peugeot->stopper();
$peugeot->demarrer();
$peugeot->accelerer(20);
$peugeot->accelerer(40);
$peugeot->afficherVitesse();
$peugeot->demarrer();



