<?php
$a = 5.0;
$b = 3.5;
$res = $a <=> $b;
switch ($res) {
    case -1:
        echo "$a est inférieur à $b";
        break;
    case 0:
        echo "$a est égal à $b";
        break;
    case 1:
        echo "$a est supérieur à $b";
        break;
}
?>
