<h1>Exercice 14</h1>

<p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";
</p>

<h2>Resultat</h2>

<?php

class Voiture
{
    private string $marque;
    private string $modèle;
    private int $idVoiture = 0 ;

    private static $nbVehicules = 1;



    public function __construct(string $marque, string $modèle)
    {
        $this->marque = $marque;
        $this->modèle = $modèle;
        $this->idVoiture = self::$nbVehicules;
        self::$nbVehicules++;
    }


    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
            return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
            $this->marque = $marque;

            return $this;
    }

    /**
     * Get the value of modèle
     */ 
    public function getModèle()
    {
            return $this->modèle;
    }

    /**
     * Set the value of modèle
     *
     * @return  self
     */ 
    public function setModèle($modèle)
    {
            $this->modèle = $modèle;

            return $this;
    }


    public function getIdVoiture()
    {

        echo $this->idVoiture . "<br>";
    }

    public function afficherinfo()
    {
    echo "<br>Infos véhicule " . $this->idVoiture . "<br>
    ******************** <br>
    Nom et modéle du véhicule : " . $this->marque . " " . $this->modèle."<br>" 
    ;
    }
}


Class VoitureElec extends Voiture 
{
    private int $autonomie;

    public function __construct(string $marque, string $modèle,int $autonomie){
        
        parent::__construct($marque,$modèle);
        $this->autonomie = $autonomie ;
    }

    /**
     * Get the value of autonomie
     */ 
    public function getAutonomie()
    {
            return $this->autonomie;
    }

    /**
     * Set the value of autonomie
     *
     * @return  self
     */ 
    public function setAutonomie($autonomie)
    {
            $this->autonomie = $autonomie;

            return $this;
    }

    public function afficherinfo()
    {
        echo parent::afficherinfo()."
        l'autonomie du véhicule est de ".$this->autonomie."<br>";
    }

}

$v1 = new Voiture("Peugeot","408");
$v2 = new VoitureElec("BMW","I3",100);

$v1->afficherinfo();
$v2->afficherinfo();