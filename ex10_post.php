<?php
if (!isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
    $message = "Aucune donnée reçue. Veuillez remplir le formulaire ex10_post.html.";
} else {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

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
    <title>Résultat POST</title>
</head>
<body>
    <h1>Résultat (POST)</h1>
    <p><?= $message ?></p>
    <p><a href="ex10_post.html">Retour au formulaire</a></p>
</body>
</html>