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

    .musica {
      background-color: #ffffff;
      padding: 125px;
      border-radius: 28px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
      width: 400px;
      height: 670px;
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

    /* Adicione esta parte para a imagem */
    img {
      width: 180px;
      height: 180px;
      margin-bottom: 20px; /* Ajuste conforme necessário */
    }

    .botaovoltar {
    position: absolute;
    top: 20px;
    right: 20px;
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

    <div class="musica">
      <img src="musicliveblack.png" alt="Descrição da imagem" class= "musicliveblack">
      <h2>Conte sobre você</h2>
      <form action="bd_acoes2.php" method="POST">
        <label for="musica_favorita">Musica favorita:</label>
        <input type="text" name="musica_favorita"> <br><br>

        <label for="artista_favorito">Artista favorito:</label>
        <input type="text" name="artista_favorito"> <br><br>

        <label for="estilo_favorito">Estilo musical:</label>
        <input type="text" name="estilo_favorito"> <br><br>

        <label for="banda_favorita">Banda favorita:</label>
        <input type="text" name="banda_favorita"> <br><br>
      
        <button type="submit" name="inserir_registro2"> Enviar </button>
      </form>
    </div>
</body>
</html>
