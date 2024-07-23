<?php
    include('../include/conexao.php');
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $ativo = $_POST['ativo'];
    $cidade = $_POST['cidade'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alteração de Cliente</h1>    
    <?php
        echo "<p>ID: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Senha: $senha</p>";
        echo "<p>Ativo: $ativo</p>";
        echo "<p>Codigo Cidade: $cidade</p>";
        //query SQL
        $sql = "UPDATE cliente SET nome='$nome', email='$email', senha='$senha', ativo='$ativo', id_cidade='$cidade' WHERE id='$id'";
        //função pra mandar a query
        $result = mysqli_query($con, $sql);
        if($result)
        {
            echo "Dados Atualizados\n";
        }
        else
        {
            echo "Erro ao Atualizar dados!\n".mysqli_error($con);
        }
    ?>
    <br>
    <button><a href="ListarCliente.php">Voltar</a></button>

</body>
</html>