<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo14</title>
</head>
<body>
    <h1>Exercice 14 </h1>
    <p>Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques
suivantes :
Peugeot 408 : $v1 = new Voiture("Peugeot","408");
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";</p>
    <h2></h2>
</body>
</html>


<!-- ***********php******* -->
<?php

class Voiture {
    public string $marque;
    public string $modele;

    public function __construct(string $marque, string $modele) {
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function afficherInfos() {
        echo "Marque :  $this->marque<br>";
        echo "Modèle :  $this->modele <br>";
    }

}


class VoitureElec extends Voiture {
    public int $autonomie;

    public function __construct(string $marque, string $modele, int  $autonomie) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->autonomie = $autonomie;
    }


    public function afficherInfos() {
       echo "Autonomie : $this->autonomie";
    }

}

$v1 = new Voiture("Peugeot","408");
$ve1 = new VoitureElec("BMW","I3",100);

$v1->afficherInfos();
$ve1->afficherInfos();

?>
