<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbDataBase = 'Chat2';

$conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbDataBase);

if ($conn-> connect_errno) {
    die("Hay un error");
}
?>