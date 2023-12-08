<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> music live</title>
</head>

<body>
       <?php
              include('config.php');

              $resultado = mysqli_query($conexao,"select * from usuario");

              echo "\n";
              //Enquanto existir linhas resultantes da consulta realizada, serão exibidos os dados no navegador, acessando os
              //respectivos campos da tabela 
              while ($linha = mysqli_fetch_array ($resultado)) {
                     echo $linha["login"] . "<br>";
                     echo $linha["senha"] . "<br>"; 
                     
                     echo "<hr>\n";
              }
              echo "\n";
              mysqli_close($conexao);
       ?>
</body>
</html>

