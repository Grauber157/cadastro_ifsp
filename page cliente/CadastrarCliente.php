<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="CadastrarClienteExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Alunos</legend>
            <div>
                <label for="">Nome: </label>
                <input type="text" name="nome"><br>

                <label for="">Email: </label>
                <input type="email" name="email"><br>

                <label for="">Senha: </label>
                <input type="password" name="senha"><br>

                <label for="">Ativo: </label>
                <input type="radio" name="ativo" value="1">
                <input type="radio" name="ativo" value="0" checked>
            </div>

            <div>
                <label for="cidade">Cidade</label>
                <select name="cidade" id="cidade">
                    <?php 
                        include('../include/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }
                    ?>
                </select>
            </div>
            <div>
                <input type="submit" value="Enviar">
            </div>




        </fieldset>
    </form>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
</body>
</html>