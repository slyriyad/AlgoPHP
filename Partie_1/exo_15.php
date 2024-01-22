<h1>Exerice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") </p>

<h2>Resultat</h2>

<?php


class Personne {
    private string $name;
    private string $firstname;
    private DateTime $birthdate;
    
    

    public function __construct(string $Name, string $firstname, string $birthdate)
    {
        $this->name = $Name;
        $this->firstname = $firstname;
        $this->birthdate = new DateTime($birthdate);
    }

    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }


    public function getFirstname()
    {
        return $this->firstname;
    }

    
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    public function calculerAge() {
        $aujourdHui = new DateTime();
        $difference = $this->birthdate->diff($aujourdHui);
        return $difference->y;
    }
    public function afficherInformations() {
        $age = $this->calculerAge();
        echo "Nom: " . $this->name . "<br>";
        echo "Prénom: " . $this->firstname . "<br>";
        echo "Âge: " . $age . " ans<br>";
        echo "<br>";
    }

    public function __toString() {
        return $this->firstname." ".$this->name." a ".$this->calculerAge()." ans";
    }

}



spl_autoload_register(function ($class_name) {
    require $class_name . '.php';

});


$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

echo $p1->afficherInformations();
echo $p2->afficherInformations();


echo $p2->afficherInformations();


// $p2->setName($p1->getName());