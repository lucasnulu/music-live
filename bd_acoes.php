<?php
require 'config.php';

//caso seja recebido o login do botão INSERIR
if(isset($_POST['inserir_registro']))
{
	$login = $_POST['login'];
    $senha = $_POST['senha'];
    

    $instrucao = "INSERT INTO usuario (login, senha) VALUES ('".$login."',".$senha.")";
	//echo $instrucao;
    echo "<br>";
    $resultado = mysqli_query($conexao, $instrucao);
    if($resultado)
    {
        echo "Registro cadastrado com sucesso!";  
    }
    else
    {
        echo "Registro não cadastrado";
    }
    echo "<br><br> <a href='index.html'> Voltar </a>";
}
//caso seja recebido o login do botão ALTERAR


//caso seja recebido o login do botão EXCLUIR
if(isset($_POST['excluir_registro']))
{
    $login = $_POST['login'];

    $instrucao = "DELETE FROM usuario WHERE login like '".$login."' ";
    //echo $instrucao;
    $resultado = mysqli_query($conexao, $instrucao);

    if($resultado)
    {
        echo "Regitro excluído com sucesso";
    }
    else
    {
        echo "Não foi possivel excluir o registro";
    }
    echo "<br><br> <a href='excluir.php'> Voltar </a>";

}



?>