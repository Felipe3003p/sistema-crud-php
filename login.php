<?php
    if ($_POST["nomedeusuario"] == "Itaquera" && $_POST["senhadousuario"] == "Timão") {

        session_start();
        $_SESSION["Login"] = "SIM";
        echo"<h1>usuario e senha esta correto, você está logado</h1>";
        echo"<p><a href='pagina_restrita.php'>Link para o arquivo restrito</a></p>";

        }else{
            session_start();
            $_SESSION["login"] = "NÃO";
            echo "<h1>Usuario ou senha está incorreto, você não está logado</h1>";
            echo "<p><a href='pagina_restrita.php'>Link para o arquivo restrito</a></p>";
        }

    


?>