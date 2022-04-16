<?php
include ("Config/config.php");

if($_POST) {
    $user = $_POST['lognom'];
    $contra = $_POST['logcontra'];

    $q = "SELECT * FROM user01 WHERE user = '". $user ."' AND pass = '". $contra ."' ";
    $query = mysqli_query($conn, $q);
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['user'] = $row['user'];
        header('location:home.php');
    } else {
        echo "<script> alert('Nombre o Contraseña incorrectas.'); </script>";
    }
}
?>

<html>
    <head>
        <title></title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="container-log">
        <h2 class="container_title">Iniciar Sesion</h2>
            <form action="" method="POST" class="container_form">
                <input name="lognom" type="text" class="container_input">
                <input name="logcontra"type="password" class="container_input">
                <input type="submit" name="log">
            </form>
        </div>
        <a href="register.php"><label class="container-regis">Registrarse</label></a>
    </body>
</html>
