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

class Voiture
{
    private string $marque;
    private string $modèle;
    private int $nbPortes;
    private int $vitesseActuelle = 0;
    private bool $statut = false;
    private int $idVoiture = 0;

    private static $nbVehicules = 1;



    public function __construct(string $marque, string $modèle, int $nbPortes)
    {
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->nbPortes = $nbPortes;
        $this->idVoiture = self::$nbVehicules;
        self::$nbVehicules++;
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

    public function getIdVoiture()
    {

        echo $this->idVoiture . "<br>";
    }


    public function demarrer()
    {
        if (!$this->statut) {
            $this->statut = true;
            $resultat = " démarre";
        } else {
            $resultat = " est déjà démarré";
        }
        echo "Le véhicule " . $this->marque . " " . $this->modèle . "$resultat<br>";
    }


    public function accelerer(int $vitesse)
    {
        if (!$this->statut) {
            $result = " veut accélerer de $vitesse<br> Pour accélerer, il faut démarrer le vehiule" . $this->marque . " " . $this->modèle;
        } else {
            $this->vitesseActuelle += $vitesse;
            $result = "accélère de $vitesse";
        }
        echo "Le véhicule " . $this->marque . " " . $this->modèle . " $result km / h<br>";
    }


    public function stopper()
    {
        if ($this->statut) {
            $this->statut = false;
            $resultat = " s'eteint";
        } else {
            $resultat = " est déjà eteint";
        }
        echo "Le véhicule " . $this->marque . " " . $this->modèle . "$resultat<br>";
    }


    public function ralentir(int $vitesse)
    {
        if (!$this->statut) {
            $result = " veut accélerer de $vitesse<br> Pour accélerer, il faut démarrer le vehiule" . $this->marque . " " . $this->modèle;
        } else {
            $this->vitesseActuelle -= $vitesse;
            $result = "ralenti de $vitesse";
        }
        echo "Le véhicule " . $this->marque . " " . $this->modèle . " $result km / h<br<";
    }


    public function afficherVitesse()
    {
        echo "La vitesse du véhicule " . $this->marque . " " . $this->modèle . " est de : " . $this->vitesseActuelle . " km / h<br>";
    }


    public function etatvehicule()
    {
        if ($this->statut) {
            $resultat = " est démarré";
        } else {
            $resultat = " est eteint";
        }
        return "Le véhicule " . $this->marque . " " . $this->modèle . "$resultat";
    }


    public function afficherinfo()
    {
        echo "<br>Infos véhicule " . $this->idVoiture . "<br>
        ******************** <br>
        Nom et modéle du véhicule : " . $this->marque . " " . $this->modèle . "<br>
        Nombre de portes : " . $this->nbPortes . "<br>"
            . $this->etatvehicule() . "<br>" .
            "Sa vitesse actuelle est de : " . $this->vitesseActuelle . " km / h<br>";
    }
}

$peugeot = new Voiture("Peugeot", "408", 5);



$citroën = new Voiture("Citroën", "C4", 3);


$peugeot->afficherinfo();
$citroën->afficherinfo();

$peugeot->afficherinfo();
