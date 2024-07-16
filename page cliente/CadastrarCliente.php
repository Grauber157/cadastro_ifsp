<?php
    include('../include/conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $ativo = $_POST['ativo'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO cliente(nome, email, senha, ativo) VALUES()"
?>