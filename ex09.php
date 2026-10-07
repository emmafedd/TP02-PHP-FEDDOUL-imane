<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];

$somme = 0;
$nbValides = 0;
$meilleureNote = null;
$meilleurEtudiant = "";

foreach ($notes as $nom => $note) {
    $somme += $note;
    if ($note >= 10) {
        $nbValides++;
    }
    if ($meilleureNote === null || $note > $meilleureNote) {
        $meilleureNote = $note;
        $meilleurEtudiant = $nom;
    }
}

$moyenne = $somme / count($notes);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>
    <h1>Notes des étudiants</h1>

    <table border="1" cellpadding="6">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Validé</th>
        </tr>
        <?php foreach ($notes as $nom => $note): ?>
            <tr>
                <td><?= $nom ?></td>
                <td><?= $note ?></td>
                <td><?= $note >= 10 ? "Validé" : "Non validé" ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?></p>
    <p>Étudiants ayant validé : <?= $nbValides ?></p>
    <p>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</p>
</body>
</html>