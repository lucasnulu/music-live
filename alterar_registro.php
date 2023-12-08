<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>music live</title>
    <style>
        .echo{
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php
        include('config.php');

        //Através do método get, conseguimos capturar os dados dos campos do formulário e armazenar em variáveis locais
        //que serão usadas para compôr a instrução SQL e assim os dados serão armazenados no banco de dados.
        $login = $_GET["login"];
        $senha = $_GET["senha"];
        $botao = $_GET["botao"];


        //Aqui armazenamos em uma variável, uma string que representa a instrução para inserir os dados no banco de dados.
        $instrucao = "update usuario set login = '".$login."', senha=".$senha." where login like '".$botao."'";
        

        //para executar a instrução SQL, a função mysqli_query deve ser chamada, passando como parâmetro a variável de conexão e a instrução SQL,
        $resultado= mysqli_query($conexao, $instrucao);

        //Após realizada a instrução, podemos fechar a conexao com o banco de dados, por meio da função msqli_close
        

        

        if($resultado){
            echo "Regitro alterado com sucesso";
        }

        else{
            echo "Não foi possivel alterar o registro";
        }

        mysqli_close($conexao);

        echo "<br><br> <a href='editarperfil.php'> Voltar </a>";
    ?>
    <br><br>
    
</body>
</html>