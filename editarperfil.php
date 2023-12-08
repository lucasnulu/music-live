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

    .login-container {
      background-color: #ffffff;
      padding: 125px;
      border-radius: 28px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      width: 400px;
      height: 600px;
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
      margin-bottom: 20px; 
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
      top: 100px;
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

    <div class="login-container">
        <div class= "excluir">
            <a href="excluir.php">
                <Label>Excluir perfil</Label>
            </a>
        </div>

        <img src="musicliveblack.png" alt="Descrição da imagem" class= "musicliveblack">
        <h2>Editar Perfis</h2>
        <form name="listagem" method="post" action="#">
            <label for="selecionar login">Selecionar um login:</label>
            <select name="lista" ><br /><br />
                <option value="" data-default disabled selected></option>
                <?php
                    include('config.php');

                    $resultado = mysqli_query($conexao,"select * from usuario");
                    while ($linha = mysqli_fetch_array ($resultado)) {   
                        ?>
                            <option value="<?php echo $linha['login'] ?>"> <?php echo $linha['login'] ?></option>
                        <?php 
                    } 
                ?>
            </select>
            <button type="submit">Buscar</button> <br><br>
        </form>

    <br><br>
    <hr>
    <?php
        //condição que verifica se houve alguma submissão do formulário
        if (!$_POST) {
            echo "Nenhum registro selecionado";
        }else{
            $instrucao = "select * from usuario where login like '".$_POST['lista']."'"; 
            $resultado = mysqli_query($conexao, $instrucao);

            while ($linha = mysqli_fetch_array ($resultado)) {   
            ?>
                <form action="alterar_registro.php" method="get">
                    <label for="username">Novo login:</label>
                    <input type="text" name="login" value="<?php echo $linha['login']?>"> 

                    <label for="password">Nova senha:</label>
                    <input type="text" name="senha" value="<?php echo $linha['senha'] ?>" >
                    
                    <button type="submit" name="botao" value="<?php echo $linha['login'] ?>" > Alterar</button> <br><br>

                 </form>
            <?php
            }
        } 
        mysqli_close($conexao); 
    ?>
    </div>
</body>
</html>
