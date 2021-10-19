<?php

function conectar()
{
    $username = "root";
    $password = "";
    $hostname = "localhost";
    $bd = "incompanybd";
    $conn = mysqli_connect($hostname, $username, $password, $bd);

    if (mysqli_connect_errno($conn)) {
        echo "Problemas	para	conectar	no	banco.	Erro:	";
        echo    mysqli_connect_error();
        die();
    } else {
        return $conn;
    }
}
