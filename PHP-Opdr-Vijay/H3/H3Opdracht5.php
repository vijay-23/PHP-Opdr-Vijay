<?php
$bedrag = 10;
$normaalbedrag = 10;

$leeftijd = 10;

if ($leeftijd >= 65) {
    $bedrag = $bedrag / 2 ." Euro";
}
if ($leeftijd <= 12) {
    $bedrag = $bedrag / 2 ." Euro";
}
if ($leeftijd <= 3) {
    $bedrag = "Gratis toegang";
}
echo $bedrag;