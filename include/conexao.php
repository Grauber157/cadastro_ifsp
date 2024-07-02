<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "ifsp";
$port = 3307;

$link = mysqli_connect($hostname, $username, $password, $database, $port);

if(mysqli_connect_errno())
{
    echo("Erro conexão: %s". mysqli_connect_error());
    exit();
}

?>