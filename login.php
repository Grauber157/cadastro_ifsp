<?php
    include('include/conexao.php');

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT email, senha FROM cliente WHERE email = '$email'";
    $result = mysqli_query($con, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        //CHECAGEM SENHA
        $row = mysqli_fetch_array($result);
        if($row['senha'] == $senha)
        {
            include('inicia_sessao.php');
            $_SESSION['login'] = $row;
            header('location: menu.php');
        }
        else
        {
            echo "<h1>Senha inválida</h1>";
        }
    }

    else
    {
        echo "<h1>Usuário não encontrado</h1>";
    }

    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    
?>