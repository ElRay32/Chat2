<?php
include ("Config/config.php");

$nom = $_POST["nombre"];
$contras = md5($_POST["contra"]);

$inser = "INSERT INTO user01(user, pass, rango01, fecha) VALUES('$nom','$contras','1',now())";

$resultado = mysqli_query($conn, $inser);

?>