<?php
$booleano1 = true;
$booleano2 = false;
$booleano3 = true;

if ($booleano1 and $booleano2){
    echo "Verdadeiro";
    echo "<br>";
} else {
    echo "Falso";
    echo "<br>";
}
if ($booleano1 or $booleano2){
    echo "Verdadeiro";
    echo "<br>";
} else {
    echo "Falso";
    echo "<br>";
}
if ($booleano1 xor $booleano3){
    echo "Verdadeiro";
    echo "<br>";
} else {
    echo "Falso";
    echo "<br>";
}
if (!$booleano2){
    echo "Verdadeiro";
    echo "<br>";
} else {
    echo "Falso";
    echo "<br>";
}
if ($booleano1 && $booleano3){
    echo "Verdadeiro";
    echo "<br>";
} else {
    echo "Falso";
    echo "<br>";
}
if (!$booleano1 || !$booleano3){
    echo "Verdadeiro";
    echo "<br>";
} else {
    echo "Falso";
    echo "<br>";
}
?>