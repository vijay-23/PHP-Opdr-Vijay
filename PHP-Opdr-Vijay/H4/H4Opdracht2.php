<?php
function celsiusOmzetten($aantalC) {
    $gradenF = ($aantalC*1.8)+32;
    return $gradenF;
}

echo celsiusOmzetten(25) . " ˚F";
