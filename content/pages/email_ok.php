<h1>Mensagem enviada com sucesso</h1>
<h2>A redireccionar...</h2>
<a href="../index.php?p=home">Ir para página principal</a>
<a href="../index.php?p=contact">Enviar nova mensagem</a>
<?php 

    include('../db/message/insert.php');

    //Guardar mensagem na BD
    //header('Location: ../index.php?p=contact&r=ok');
    header( "refresh:5;url=../index.php?p=home" );
?>