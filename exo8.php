<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo8</title>
</head>
<body>
    <h1>Exercice 8</h1>
    <p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>
    <h2></h2>
</body>
</html>


<!-- ***********php******* -->
<?php

function repeterImage() {
    $image =  '<img src="http://my.mobirise.com/data/userpic/764.jpg" alt="">';
    $x = 0;
    while( $x <= 1) {
        echo $image;
        $x++;
    }
}repeterImage();

?>