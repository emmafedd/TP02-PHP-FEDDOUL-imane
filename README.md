# TP02-PHP-FEDDOUL-imane
# TP 02 PHP

- **Nom :** FEDDOUL
- **Prénom :** imane
- **Groupe :** 3
- **TP :** TP 02 PHP — Programmation Web 2 — 2026/2027

## Exercices
1. Exercice 1 : balises, echo, commentaires
2. Exercice 2 : variables et concaténation
3. Exercice 3 : constantes et calculs
4. Exercice 4 : types et conversions
5. Exercice 5 : conditions
6. Exercice 6 : switch
7. Exercice 7 : boucles for
8. Exercice 8 : while, do-while, break, continue
9. Exercice 9 : tableaux associatifs
10. Exercice 10 : formulaires GET et POST

## Exercice 4 : types et conversions

`echo` convertit son argument en chaîne : `true` devient `"1"` et `false` devient une chaîne vide `""`, donc rien ne s'affiche pour `false`. `var_dump()` affiche le vrai type et la vraie valeur, donc `false` apparaît sous la forme `bool(false)`.

## Exercice 5 : conditions (if / elseif / else)

Fichier : `ex05.php`

J'ai testé la variable `$moyenne` avec plusieurs valeurs en la modifiant dans le code, puis en actualisant la page dans le navigateur.

-1  Note invalide 
 9  Non validé 
10  Passable 
12  Assez bien 
14  Bien 
16  Très bien 
1  Note invalide 

Les valeurs limites (10, 12, 14 et 16) sont bien traitées : chacune passe dans la mention supérieure. Les notes hors de l'intervalle 0 à 20 (-1 et 21) affichent « Note invalide » et ne reçoivent aucune mention.

## Exercice 10 : formulaires GET et POST

**GET :** après l'envoi, les valeurs apparaissent dans l'URL, après le `?`, sous la forme `ex10_get.php?nom=...&prenom=...&groupe=G1`. Elles sont visibles par tout le monde.

**POST :** l'URL reste `ex10_post.php`, sans aucune valeur. Les données sont envoyées dans le corps de la requête HTTP.

**Comparaison :** GET affiche les données dans l'URL, POST les cache de l'URL (sans pour autant les chiffrer).