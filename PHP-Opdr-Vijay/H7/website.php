<?php
session_start();

if (isset($_SESSION["user"])) {
    echo "<h1>Welkom ".$_SESSION["user"];
}
else {
    header('location: H7Opdracht1.php');
}