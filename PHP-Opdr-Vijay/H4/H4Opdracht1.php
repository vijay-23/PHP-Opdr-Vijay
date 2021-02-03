<?php
$dieren = array("aap", "beer", "konijn", "vis");
$sporten = array("handbal ", "korfbal ", "hockey ", "schaatsen ");
/* shuffle($sporten);
echo  "Er zijn " .count($sporten) . " sporten in de array";
*/

geefArrayWeerAlsLijst($sporten);
geefArrayWeerAlsLijst($dieren);

function geefArrayWeerAlsLijst($arr) {
    foreach ($arr as $arr_element) {
        echo "<br>" .$arr_element;
    }
}
/*
foreach ($sporten as $sport) {
    echo "<br>" . $sport;
}*/