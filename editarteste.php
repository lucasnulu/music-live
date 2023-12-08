<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>music live</title>
  <style>
    body {
            font-family: 'Candara', Candara, Calibri, Calibri, sans-serif;
            background-color: #f5f5f5;
            margin: 5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .musica_favorita-container {
            background-color: #ffffff;
            padding: 125px;
            border-radius: 28px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            width: 400px;
            height: 690px;
            text-align: center;
        }

        h2 {
            color: #333333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            text-align: left;
            font-weight: bold;
        }

        input {
            width: calc(100% - -6px);
            padding: 10px;
            margin-bottom: 26px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 14px;
        }

        button {
            background-color: #000000;
            color: #fff;
            padding: 10px 40px;
            border: none;
            border-radius: 23px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0b0b64;
        }

        img {
            width: 180px;
            height: 180px;
            margin-top: 1px;
        }

        select {
            width: calc(100% - -6px);
            padding: 10px;
            margin-bottom: 26px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 25px;
            font-size: 14px;
        }

        .botaovoltar {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        a {
            color: #000000;
            text-decoration: none;
            cursor: pointer;
        }

        a:hover {
            color: #000000;
            text-decoration: underline;
        }

    .excluir{
      position: absolute;
      top: 50px;
      right: 640px;
    }

    .musicliveblack{
        width: 90px;
        height: 120px;
    }

  </style>
</head>
<body>
    <div class= "botaovoltar">
      <a href="index.html">
        <button type="submit">Voltar</button>
      </a>
    </div>

    <div class="musica_favorita-container">
        <div class= "excluir">
            <a href="excluir2.php">
                <Label>Excluir teste</Label>
            </a>
        </div>

        <img src="musicliveblack.png" alt="Descrição da imagem" class= "musicliveblack">
        <h2>Editar teste</h2>
        <form name="listagem" method="post" action="#">
            <label for="selecionar um estilo">Selecionar uma música:</label>
            <select name="lista" ><br />
                <option value="" data-default disabled selected></option>
                <?php
                    include('config2.php');

                    $resultado = mysqli_query($conexao,"select * from musica");
                    while ($linha = mysqli_fetch_array ($resultado)) {   
                        ?>
                            <option value="<?php echo $linha['musica_favorita'] ?>"> <?php echo $linha['musica_favorita'] ?></option>
                        <?php 
                    } 
                ?>
            </select>
            <button type="submit">Buscar</button>
        </form>

    <br><br>
    <hr>
    <?php
        //condição que verifica se houve alguma submissão do formulário
        if (!$_POST) {
            echo "Nenhum registro selecionado";
        }else{
            $instrucao = "select * from musica where musica_favorita like '".$_POST['lista']."'"; 
            $resultado = mysqli_query($conexao, $instrucao);

            while ($linha = mysqli_fetch_array ($resultado)) {   
            ?>
                <form action="alterar_registro2.php" method="get">
                    <label for="musica_favorita">Nova musica favorita:</label>
                    <input type="text" name="musica_favorita" value="<?php echo $linha['musica_favorita']?>"> 

                    <label for="artista_favorito">Novo artista favorito:</label>
                    <input type="text" name="artista_favorito" value="<?php echo $linha['artista_favorito'] ?>" >

                    <label for="estilo_favorito">Novo estilo favorito:</label>
                    <input type="text" name="estilo_favorito" value="<?php echo $linha['estilo_favorito'] ?>" >

                    <label for="banda_favorito">Nova banda favorito:</label>
                    <input type="text" name="banda_favorita" value="<?php echo $linha['banda_favorita'] ?>" >
                    
                    <button type="submit" name="botao" value="<?php echo $linha['musica_favorita'] ?>" > Alterar</button> <br><br>

                 </form>
            <?php
            }
        } 
        mysqli_close($conexao); 
    ?>
    </div>
</body>
</html>
