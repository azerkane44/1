<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les horaires</title>
</head>

<body>

    <h2>Modifier les horaires d'ouverture :</h2>

    <form method="post" action="modifier_horaires.php">
        <label for="lundi_vendredi">Nouveaux horaires pour Lundi - vendredi :</label>
        <input type="text" name="lundi_vendredi" id="lundi_vendredi" required>

        <label for="samedi">Nouveaux horaires pour Samedi :</label>
        <input type="text" name="samedi" id="samedi" required>

        <input type="submit" value="Enregistrer">
    </form>

</body>

</html>