<?php

    session_start();

    if ($_SESSION["Login"] != "SIM") {
        header("Location: formulario.html");
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Sistema de login</title>
</head>
<body>
    <h1> Você está em um arquivo restrito</h1>

    <p>Permitido somente para usúarios autorizados.</p>
    <p><a href='logoff.php'>LOGOFF</a></p>
</body>
</html>