<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <li><a href="index.php">Home</a></li>

            <?php
                include('inicia_sessao.php');
                if(empty($_SESSION['login']))
                {
                    header("location: login.php");
                }
            ?>
        </ul>
    </div>
</body>
</html>