<?php
echo"Bienvenido, <a href='modulos/logout.php'>Salir</a>";
include "config/config.php";
$rr = "SELECT * FROM 'mensajes'"
?>

<section id="mensajes"></section>
<section id="enviar">
    <input type="text" id="msg" placeholder="Escribe algo porfa" onkeyup="check(event)">
</section>
<section id="hide"></section>
<script type="text/javascript">
    function recargar(){
        $.ajax({
            url : "ajax"/mensajes.php,
            type : "post",
            success : function(response){
            $("#mensajes").html(response);
        }
        });
    }
   function check(e) {
        if (e.which==13) {
            enviar();
            
        }
    }
function enviar() {
    var mensaje = $("#msg").val();

    var parametros = {
        "mensaje" : mensaje
    };
    $.ajax({
        type : "post",
        data : parametros,
        url : "ajax"/enviar.php,
        success : function(response){
            $("#hide").html(response);
            $("#msg").val('');
            recargar();
        }
    })
}
</script>


