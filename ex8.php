<!DOCTYPE html>
<html>
<head>
    <title>Vérification de nombre pair ou impair</title>
</head>
<body>
    <h1>Vérification de nombre pair ou impair</h1>

    <form method="post" action="">
        <label for="nombre">Entrez un nombre :</label>
        <input type="text" name="nombre" id="nombre">
        <input type="submit" name="vérifier" value="Vérifier">
    </form>

    <?php
    if (isset($_POST['vérifier'])) {
        $nombre = intval($_POST['nombre']);

        if ($nombre % 2 == 0) {
            echo "<p>Le nombre $nombre est pair.</p>";
        } else {
            echo "<p>Le nombre $nombre est impair.</p>";
        }
    }
    ?>
</body>
</html>
