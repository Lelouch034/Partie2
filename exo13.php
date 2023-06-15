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
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle;

    public function __construct($marque, $modele, $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
        $this->vitesseActuelle = 0;
    }

    public function demarrer() {
        echo "La voiture démarre.";
    }

    public function accelerer() {
        echo "La voiture accélère.";
        $this->vitesseActuelle += 10;
    }

    public function stopper() {
        echo "La voiture s'arrête.";
        $this->vitesseActuelle = 0;
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

    public function afficherInfos() {
        echo "Marque : " . $this->marque . "<br>";
        echo "Modèle : " . $this->modele . "<br>";
        echo "Nombre de portes : " . $this->nbPortes . "<br>";
        echo "Vitesse actuelle : " . $this->vitesseActuelle . "<br>";
    }

    public function voitureStats() {
        
    }
    
}
$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

$v1->demarrer();
$v1->accelerer();
$v1->afficherInfos();
$v2->demarrer();
$v2->accelerer();
$v2->accelerer();
$v2->afficherInfos();
$v2->stopper();
$v2->afficherInfos();




?>
