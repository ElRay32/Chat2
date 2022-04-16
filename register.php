<?php
include("Config/config.php");
$usuarios = "SELECT * FROM 'user01'";
?>
<html>
    <head>
        <title></title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="container-add">
            <h2 class="container_title">Registrar</h2>
            <form action="insertar.php" method="POST" class="container_form">
                <label for="" class="container_label"></label>
                <input name="nombre" type="text" class="container_input">
                <label for="" class="container_label"></label>
                <input name="contra"type="password" class="container_input">
                <input type="submit">
            </form>
        </div>
    </body>
</html>