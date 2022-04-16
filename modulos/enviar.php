<?php
include "../config/config.php";
session_start();


$men = $_REQUEST['mensaje'];

$e = "INSERT INTO mensajes(mensaj, userm, fecha) VALUES('$men','".$_SESSION['id']."',now())";

$resultado2 = mysqli_query($conn, $e);
if ($resultado2) {
   header('Location:home.php');
}
else {
    echo "Algo salio mal";
}
?>