<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>music live</title>
    <style>
        .echo {
            font-size: 20px;
        }
    </style>
</head>

<body>
    <?php
    include('config2.php');

    $musica_favorita = $_GET["musica_favorita"];
    $artista_favorito = $_GET["artista_favorito"];
    $estilo_favorito = $_GET["estilo_favorito"];
    $banda_favorita = $_GET["banda_favorita"];
    $botao = $_GET["botao"];

    // Use prepared statements
    $instrucao = "UPDATE musica SET musica_favorita = ?, artista_favorito = ?, estilo_favorito = ?, banda_favorita = ? WHERE musica_favorita LIKE ?";
    $stmt = mysqli_prepare($conexao, $instrucao);
    mysqli_stmt_bind_param($stmt, 'sssss', $musica_favorita, $artista_favorito, $estilo_favorito, $banda_favorita, $botao);
    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        echo "Registro alterado com sucesso";
    } else {
        echo "Não foi possível alterar o registro: " . mysqli_error($conexao);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexao);

    echo "<br><br> <a href='editarteste.php'> Voltar </a>";
    ?>
    <br><br>

</body>
</html>
