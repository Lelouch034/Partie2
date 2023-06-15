<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
</head>
<body>
    <h1>Exercice 5 </h1>
    <p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en
précisant le nom des champs associés.</p>
    <h2></h2>
</form>
</body>
</html>


<!-- ***********php******* -->
<?php
$nomsInput = array("Nom","Prénom","Ville");

function afficherInput($nomsInput) {
    echo '<form>';
    
    foreach ($nomsInput as $nom) {
        echo '<label for="$nom ">' . $nom . ':</label>';
        echo '<input type="text"><br>';
    }
    
    echo '</form>';
}afficherInput($nomsInput);



?>
