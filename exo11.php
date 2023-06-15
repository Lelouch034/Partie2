<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo11</title>
</head>
<body>
    <h1>Exercice 11 </h1>
    <p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.</p>
    <h2></h2>
</body>
</html>


<!-- ***********php******* -->
<?php

function convertir() {
    $str = "2018-02-23";
    
    setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');
    echo "Aujourd'hui nous sommes le ".strftime("%A %d %B %Y");



}convertir();

?>
