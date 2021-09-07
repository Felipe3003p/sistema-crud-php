<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // inicio do php
        // inicia uma nova sessão

        session_start();  // variavel - nome - valor

        $_sessoes["InicioDoTempo"] = date("d/m/Y");
    ?>

       <p> <h1>Seja bem vindo</h1></p>
        <hr>
        <div class= "quadro">
       <p> Me chamo Felipe sou desenvolvedor web e esse é:<br> 
           Esse é o meu projeto de um sistema de login com php e banco de dados
           você podera se cadastrar e fazer um login quando você terminar
        o cadastro. </p>
</div>

        <div class="botoes">
        <a href="cadastar.html"><button class="button">Cadastar</button></a>

         <a href="formulario.html"><button class="button">Login</button></a>
</div>
</body>
</html>