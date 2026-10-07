<?php
define('TAUX_TVA', 20);
define('DEVISE', 'MAD');
$prixUnitaire = 60;
$quantite = 3;
$totalHT = $prixUnitaire * $quantite;
$montantTVA = $totalHT * TAUX_TVA / 100;
$totalTTC = $totalHT + $montantTVA;
$totalTTC += 15;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Récapitulatif</h1>
    <p>Total HT : <?= $totalHT . ' ' . DEVISE ?></p>
    <p>TVA : <?= $montantTVA . ' ' . DEVISE ?></p>
    <p>Montant final (TTC + livraison) : <?= $totalTTC . ' ' . DEVISE ?></p>
    <p>TAUX_TVA existe : <?= defined('TAUX_TVA') ? 'oui' : 'non' ?></p>
</body>
</html>