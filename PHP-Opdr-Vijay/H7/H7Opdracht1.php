<?php
session_start();

$users = array(
    "vijay" => array("password" => "2311"),
    "roopisch" => "310",
    "jaimy" => "1807",
);
if (isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if(isset($_POST['button'])
    && isset($users[$_POST["login"]])
    && $users[$_POST["login"]] == $_POST['password']) {
    $_SESSION["user"] = $_POST["login"];
    $message = "Welkom ".$_SESSION["user"];
}
else {
    $message = "Inloggen";
}
print_r($_SESSION);