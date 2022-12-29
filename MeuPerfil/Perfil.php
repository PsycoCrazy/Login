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
        <h1>BEM VINDO</h1>
    </div>
<?php
    session_start();
    if(isset($_POST['submit']))
    {
/*     {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['telefone']);
    } */
    include_once('../config.php');

    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
    $Data_Nasc = $_POST['Data_Nasc'];
    $Sexo = $_POST['Sexo'];
    $Senha = $_POST['Senha'];

    $result = mysqli_query($conexao, "INSERT INTO cadastro (Nome, Email, Data_Nasc, Sexo, Senha) VALUES('$Nome', '$Email', '$Data_Nasc', '$Sexo', '$Senha')");

    header('Location: ../Login\Login.php');
    }
?>

</body>
</html>