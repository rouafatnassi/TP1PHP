<?php
$nom="Fatnassi ";
$pre="Roua";
echo $nom.$pre.'<br>';

echo $nom.'<br>'.$pre;
echo '<table class="table" > <tr><td> nom </td><td> prenom </td></tr><tr><td>'.$nom.'</td><td>'.$pre.'</td></tr></table>';
$info=$nom.$pre;
echo $info;
echo "<script>";
echo "alert('.$info.');";
echo "</script>";
?>
<style>
    table, tr, td {
  border: 1px solid;
}
</style>
