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
    <form action="AlterarClienteExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Clientes</legend>
            <div>
                <label for="">Nome: </label>
                <input type="text" name="nome" value="<?php echo $row['nome'] ?>"><br>

                <label for="">Email: </label>
                <input type="email" name="email" value="<?php echo $row['email'] ?>"><br>

                <label for="">Senha: </label>
                <input type="text" name="senha" value="<?php echo $row['senha'] ?>"><br>

                <label for="">Situação Cliente: </label>

                <input type="radio" name="ativo" value="1">ATIVO
                <input type="radio" name="ativo" value="0">INATIVO<br>
                
                <label for="cidade">Cidade: </label>
                <select name="cidade" id="cidade">
                    <?php 
                        $sql2 = "SELECT * FROM cidade";
                        $result2 = mysqli_query($con, $sql2);
                        while($row2 = mysqli_fetch_array($result2))
                        {
                            echo "<option value='".$row2['id']."'>".$row2['nome']."/".$row2['estado']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <input type="submit" value="Alterar">
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
            </div>
        </fieldset>
    </form>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
</body>
</html>