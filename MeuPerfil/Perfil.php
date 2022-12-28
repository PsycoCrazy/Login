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
    $Email = $_SESSION['Email'];
    $Senha = $_SESSION['Senha'];
    $Nome = $_SESSION["Nome"];
    echo "<h4>Email:<u>$Email</u></h4>";
    echo "<h4>Senha:<u>$Senha</u></h4>";
    echo "<h4>Nome:<u>$Nome</u></h4>";
?>

</body>
</html>