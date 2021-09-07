<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        //conexão com o banco de dados
        require "bd_conectar.php";

        // comando SQL
        $strSQL = "INSERT INTO tbl_usuario(";
        $strSQL =  $strSQL . "NomeDoUsuario,";
        $strSQL =  $strSQL . "SobrenomeDoUsuario,";
        $strSQL =  $strSQL . "CelularDoUsuario,";
        $strSQL =  $strSQL . "DataNascimentoDoUsuario,";
        $strSQL =  $strSQL . "EmailDoUsuario,";
        $strSQL =  $strSQL . "SenhaDoUsuario)";

        $strSQL =  $strSQL . "VALUES(";
        $strSQL =  $strSQL . "'Felipe',";
        $strSQL =  $strSQL . "'Augusto',";
        $strSQL =  $strSQL . "'11-98899-7766',";
        $strSQL =  $strSQL . "'2005-11-15',";
        $strSQL =  $strSQL . "'exemplooooo04@etec.sp.gov.br',";
        $strSQL =  $strSQL . "'151105lipe');";

        // comando SQL Executado
        mysqli_query($conexao, $strSQL) or die (mysqli_error());

        // Encerra a conexão
        require "bd_desconectar.php";
    
    ?>

    <h1>Banco de Dados atualizado</h1>
</body>
</html>