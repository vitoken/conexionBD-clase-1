<?php
include('lib/constantes.php');
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>



        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>






    </head>
    <body>
        <form class="formulario" method="POST" action="<?=URLBASE;?>/controladores/AccUsuario.php">
            <br>Usuario <input id="usuario" name="usuario" type="text">
            <br>Clave<input id="clave" name="clave" type="password">
            <input type="submit" value="Enviar"  >                     

        </form>


    </body>
</html>
