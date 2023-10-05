<?php
    echo "<h1>Calcul sur les variables</h1>";
    $TVA = 0.2;
    $PRIX = 150;
    $Nombre = 10;
    $prixHT = $PRIX * $Nombre;
    $prixTTC = $prixHT * (1 + $TVA);
    echo "Le prix HT pour les $Nombre articles est de :".$prixHT.'<br>';
    echo "Le prix TTC pour les $Nombre articles est de : ".$prixTTC ;
    ?>