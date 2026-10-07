<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
<?php
$nom = "feddoule";
$prenom = "imane";
$age = 27;
$formation = "informatique impliquee";
$phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en " . $formation . ". ";
$phrase .= "J'apprends PHP.";
echo "<p>" . $phrase . "</p>";
$note = 12;
$Note = 16;
echo "<p>\$note = " . $note . "</p>";
echo "<p>\$Note = " . $Note . "</p>";
?>
</body>
</html>