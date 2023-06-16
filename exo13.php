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
    public int $voitureStatue;



    public function __construct($marque, $modele, $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
        $this->voitureStatue = 0;
    }

    public function stats(){

    }


    public function demarrer() {
        echo "La voiture demarre";
        
    }

    public function accelerer() {
        echo "La voiture accelere";
        $this->vitesseActuelle += 50;
    }

    public function stopper() {
        echo "la voiture s'arrête";
        $this->vitesseActuelle = 0;
    }

    public function afficherInfos() {
        echo "Informations du véhicule  :<br>";
        echo "Marque :  $this->marque<br>";
        echo "Modèle :  $this->modele <br>";
        echo "Nombre de portes :  $this->nbPortes<br>";
        echo "Vitesse actuelle :  $this->vitesseActuelle<br>";
    }
    
    

    public function getMarque() {
        return $this->marque;
    }

    public function setMarque($marque) {
        $this->marque = $marque;
    }

    public function getModele() {
        return $this->modele;
    }

    public function setModele($modele) {
        $this->modele = $modele;
    }

    public function getNbPortes() {
        return $this->nbPortes;
    }

    public function setNbPortes($nbPortes) {
        $this->nbPortes = $nbPortes;
    }

    public function getVitesseActuelle() {
        return $this->vitesseActuelle;
    }

    public function setVitesseActuelle($vitesseActuelle) {
        $this->vitesseActuelle = $vitesseActuelle;
    }

}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroen", "C4", 3);

$v1->afficherInfos();


echo"<br>";

$v2->afficherInfos();




?>
