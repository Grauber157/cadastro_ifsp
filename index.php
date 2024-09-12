<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include('inicia_sessao.php');
        if(empty($_SESSION['login']))
        {
            header("Location: login.php");
        }
    ?>

    <h2>IFSP: </h2>
    <div>
        <h3>Cidades:</h3>
        <button><a href="page cidade/CadastroCidade.html">Cadastro de Cidades</a></button><br>
        <button><a href="page cidade/ListarCidade.php">Ver Lista de Cidades</a></button><br>
    </div>
    <div>
        <h3>Alunos:</h3>
        <button><a href="page cliente/CadastrarCliente.php">Cadastro de Alunos</a></button><br>
        <button><a href="page cliente/ListarCliente.php">Ver Lista de Alunos</a></button><br>
    </div>
</body>
</html>