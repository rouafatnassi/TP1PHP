<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'addition</title>
</head>
<body>
    <h1>Formulaire d'addition</h1>

    <form method="post" action="">
        <label for="valeur1">Première valeur :</label>
        <input type="text" name="valeur1" id="valeur1">
        
        <label for="valeur2">Deuxième valeur :</label>
        <input type="text" name="valeur2" id="valeur2">
        
        <input type="submit" name="calculer" value="Calculer">
    </form>

    <?php
    if (isset($_POST['calculer'])) {
        $valeur1 = floatval($_POST['valeur1']);
        $valeur2 = floatval($_POST['valeur2']);
        $resultat = $valeur1 + $valeur2;
        echo "<p>Le résultat est : $resultat</p>";
    }
    ?>
</body>
</html>
