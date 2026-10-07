<?php
if (!isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
    $message = "Aucune donnée reçue. Veuillez remplir le formulaire ex10_get.html.";
} else {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);

    if ($nom === '' || $prenom === '' || $groupe === '') {
        $message = "Erreur : tous les champs sont obligatoires.";
    } else {
        $message = "Bienvenue "
            . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " "
            . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
            . " du groupe "
            . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . ".";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>
    <h1>Résultat (GET)</h1>
    <p><?= $message ?></p>
    <p><a href="ex10_get.html">Retour au formulaire</a></p>
</body>
</html>