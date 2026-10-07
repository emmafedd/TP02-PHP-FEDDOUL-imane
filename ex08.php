<?php
$n = 0;
$partie1 = "";
while ($n <= 20) {
    if ($n == 10) {
        $partie1 .= "<strong>$n</strong> ";
    } else {
        $partie1 .= $n . " ";
    }
    $n += 2;
}

$compteur = 5;
$executionsWhile = 0;
while ($compteur < 5) {
    $executionsWhile++;
}

$compteur = 5;
$executionsDoWhile = 0;
do {
    $executionsDoWhile++;
} while ($compteur < 5);

// Partie 3 : continue et break
$partie3 = "";
for ($i = 1; $i <= 20; $i++) {
    if ($i % 3 == 0) {
        continue;
    }
    if ($i >= 16) {
        break;
    }
    $partie3 .= $i . " ";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>
    <h1>Exercice 8 : boucles</h1>

    <h2>Partie 1 : nombres pairs de 0 à 20</h2>
    <p><?= $partie1 ?></p>

    <h2>Partie 2 : while et do-while</h2>
    <p>while : <?= $executionsWhile ?> exécution(s)</p>
    <p>do-while : <?= $executionsDoWhile ?> exécution(s)</p>

    <h2>Partie 3 : continue et break</h2>
    <p><?= $partie3 ?></p>
</body>
</html>