<?php
    include('../include/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM cliente WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
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
    <form action="AlterarCidadeExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Clientes</legend>
            <div>
                <label for="">Nome: </label>
                <input type="text" name="nome" <?php echo $row['nome'] ?>><br>

                <label for="">Email: </label>
                <input type="email" name="email" <?php echo $row['email'] ?>><br>

                <label for="">Senha: </label>
                <input type="password" name="senha" <?php echo $row['senha'] ?>><br>

                <label for="">Ativo: </label>
                <input type="text" name="ativo" <?php echo $row['ativo'] ?>>
            </div>
        </fieldset>
    </form>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
</body>
</html>