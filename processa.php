<?php 
    include "conexao.php";

    $nome = $_POST["name"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $numero = $_POST["numero"];
    $conta = $_POST["contas"];

    $sql = mysqli_query($db_conection, "INSERT INTO usuarios (nome, email) VALUES ('$nome',' $email')");
    $sql2 = mysqli_query($db_conection, "INSERT INTO enderecos (endereco, numero,qtd_contas) VALUES ('$endereco',' $numero','$conta')");

    if($sql){
        header("Location: index.php");
    }
?>
