<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="CadastrarCliente.php" method="post">
        <fieldset>
            <legend>Cadastro de Alunos</legend>
            <div>
                <label for="">Nome: </label>
                <input type="text" name="nome"><br>

                <label for="">Email: </label>
                <input type="email" name="email"><br>

                <label for="">Senha: </label>
                <input type="password" name="senha"><br>

                <label for="">Codigo Cidade: </label>
                <input type="text" name="id_cidade"><br>

                <input type="hidden" name="ativo" value="1">
            </div>
                
            <div>
                <input type="submit" value="Enviar">
            </div>
        </fieldset>
    </form>
    <button><a href="../index.html">Voltar ao Menu</a></button><br>
</body>
</html>