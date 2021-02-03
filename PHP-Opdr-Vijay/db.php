<?php
$host = 'localhost';
$port = '3308';
$user = 'root';
$pass = '';
$db = 'school';

$dbh = new PDO('mysql: host=' . $host. ';dbname=' . $db . ';port=' .$port , $user, $pass);
