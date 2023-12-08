<?php
require 'config2.php';

if (isset($_POST['inserir_registro2'])) {
    // Verifica se as chaves estão definidas no array $_POST antes de usá-las
    $musica_favorita = isset($_POST['musica_favorita']) ? $_POST['musica_favorita'] : ''; 
    $artista_favorito = isset($_POST['artista_favorito']) ? $_POST['artista_favorito'] : '';
    $estilo_favorito = isset($_POST['estilo_favorito']) ? $_POST['estilo_favorito'] : '';
    $banda_favorita = isset($_POST['banda_favorita']) ? $_POST['banda_favorita'] : '';

    // Use prepared statements para evitar SQL injection
    $instrucao = "INSERT INTO musica (musica_favorita, artista_favorito, estilo_favorito, banda_favorita) VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($conexao, $instrucao);
    mysqli_stmt_bind_param($stmt, 'ssss', $musica_favorita, $artista_favorito, $estilo_favorito, $banda_favorita);

    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        echo "Registro cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o registro: " . mysqli_error($conexao);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexao);

    echo "<br><br> <a href='index.html'> Voltar </a>";
}

if (isset($_POST['excluir_registro2'])) {
    $musica_favorita = isset($_POST['musica_favorita']) ? $_POST['musica_favorita'] : '';

    $instrucao = "DELETE FROM musica WHERE musica_favorita LIKE ?";

    $stmt = mysqli_prepare($conexao, $instrucao);
    mysqli_stmt_bind_param($stmt, 's', $musica_favorita);

    $resultado = mysqli_stmt_execute($stmt);

    if ($resultado) {
        echo "Registro excluído com sucesso";
    } else {
        echo "Não foi possível excluir o registro: " . mysqli_error($conexao);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexao);

    echo "<br><br> <a href='excluir2.php'> Voltar </a>";
}
?>
