<?php
     $conexao = mysqli_connect("localhost", "root", "", "bd_site" ) or die (mysql_error());
     mysqli_set_charset($conexao, 'utf8mb4');
?>