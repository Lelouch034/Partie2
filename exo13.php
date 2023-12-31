<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo13</title>
</head>
<body>
    <h1>Exercice 13 </h1>
    <p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
véhicule.</p>
    <h2></h2>
</body>
</html>


<!-- ***********php******* -->
<?php

class Voiture {
    public string $marque;
    public string $modele;
    public int $nbPortes;
    public int $vitesseActuelle;
    public int $voitureStatu;

  

    public function __construct( string $marque, string $modele, int $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->voitureStatu = 0;
    }
    
    public function getVoitureStatue(): int {
        return $this->voitureStatu;
    }
   
    public function setVoitureStatue($voitureStatu) {
        $this->voitureStatu = $voitureStatu;
       
    }


    //savoir si la voiture démqrre ou non 

    public function statue() {
        $this->voitureStatu += (rand(0,1));
        if($this->voitureStatu == 0) {
            echo "La voiture $this->marque $this->modele ne démarre pas";
        } else {
            echo $this->demarrer();
        }       
    }

    //fuction pour aceelerer 

    public function accélération() {
        if($this->voitureStatu == 1) {
            echo $this->accelerer();
        }else {
            echo "La voiture $this->marque $this->modele veut accelerer <br>";
            echo "Tu dois dabbord demarrer $this->marque $this->modele";
        }
    }

    

    public function getMarque(): string {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele(): string {
        return $this->modele;
    }

    public function setModele($modele){
        $this->modele = $modele;
    }

    public function getNbPortes(): int {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes) {
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle(): int {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle) {
        $this->vitesseActuelle = $vitesseActuelle;
    }

    public function vitesseActuelle() {
        echo "La vitesse de la  $this->marque $this->modele est de $this->vitesseActuelle km /h";
    }

    public function demarrer() {
        echo "La voiture $this->marque  $this->modele démarre";
        
    }

    public function stopper() {
        echo "la voiture s'arrête";
        $this->vitesseActuelle = 0;
    }

    public function accelerer() {
        $this->vitesseActuelle += (rand(0,50));
        echo "La voiture $this->marque $this->modele  accélère de $this->vitesseActuelle";
        
    }

    public function afficherInfos() {
        echo "Informations du véhicule $this->marque $this->modele :<br>";
        echo "Marque :  $this->marque<br>";
        echo "Modèle :  $this->modele <br>";
        echo "Nombre de portes :  $this->nbPortes<br>";
        echo "Vitesse actuelle :  $this->vitesseActuelle<br>";
    }
    
    //Bonus : ajouter une méthode ralentir(vitesse) dans la classe Voiture.

}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroen", "C4", 3);



$v1->statue();
echo  "<br>";
$v1->accélération();
echo  "<br>";
$v1->vitesseActuelle();
echo  "<br>";
echo  "<br>";
$v1->afficherInfos();
echo  "<br>";



echo"<br>";




$v2->statue();
echo  "<br>";
$v2->accélération();
echo  "<br>";
$v2->vitesseActuelle();
echo  "<br>";
echo  "<br>";
$v2->afficherInfos();




?>
