<?php
    $dbHost = '127.0.0.2:3307';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'formulario';

    $conexao = new mysqli($dbHost,$dbUser,$dbPassword,$dbName);

/*     if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo"Accept";
    }
 */
?>