<?php
$entier = 42;
$chaine = "42";
$decimal = 15.8;
$vrai = true;
$faux = false;
$vide = null;

$chaineEnEntier = (int) "42";
$decimalEnEntier = (int) 15.8;
$entierEnChaine = (string) 42;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Types de données</h1>

    <h2>2. Types et valeurs avec var_dump()</h2>
    <pre>
<?php
var_dump($entier);
var_dump($chaine);
var_dump($decimal);
var_dump($vrai);
var_dump($faux);
var_dump($vide);
?>
    </pre>

    <h2>3. Conversions</h2>
    <pre>
"42" en entier :
<?php var_dump($chaineEnEntier); ?>
15.8 en entier :
<?php var_dump($decimalEnEntier); ?>
42 en chaîne :
<?php var_dump($entierEnChaine); ?>
    </pre>

    <h2>4. true et false</h2>
    <p>Avec echo : true = [<?php echo true; ?>] ; false = [<?php echo false; ?>]</p>
    <pre>
Avec var_dump() :
<?php
var_dump(true);
var_dump(false);
?>
    </pre>

    <h2>5. Conversions en booléen</h2>
    <pre>
0 :
<?php var_dump((bool) 0); ?>
"0" :
<?php var_dump((bool) "0"); ?>
"PHP" :
<?php var_dump((bool) "PHP"); ?>
tableau vide :
<?php var_dump((bool) []); ?>
    </pre>
</body>
</html>