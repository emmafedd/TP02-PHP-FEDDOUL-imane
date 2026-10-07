<?php
$nombre = 7;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7 : boucles for</h1>

    <section>
        <h2>Table de multiplication de <?= $nombre ?></h2>
        <table border="1">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <td><?= $nombre ?> × <?= $i ?></td>
                    <td><?= $nombre * $i ?></td>
                </tr>
            <?php endfor; ?>
        </table>
    </section>

    <section>
        <h2>Pyramide de 6 lignes</h2>
        <?php
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            $etoiles = "";
            for ($j = 1; $j <= $ligne; $j++) {
                $etoiles .= "*";
            }
            echo $etoiles . "<br>";
        }
        ?>
    </section>
</body>
</html>