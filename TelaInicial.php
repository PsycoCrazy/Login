<?php
    session_start();
/*     print_r($_SESSION); */
    if((!isset ($_SESSION['Email']) == true) and (!isset($_SESSION ['Senha']) == true))
    {
        unset($_SESSION['Email']);
        unset($_SESSION['Senha']);
        header('Location: Login\Login.php');
    }
    $logado = $_SESSION['Email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Virtual</title>
</head>
<body>
    <div>
    <h1>BEM VINDO, ESPERO QUE SE DIVIRTA</h1>
</div>
    <div>
        <a href="sair.php" class="btn btn-sair">Sair</a>
    </div>
    <div>
    <a href="MeuPerfil/Perfil.php" class="btn btn-Perfil">Meu Perfil</a>
    </div>
</body>
</html>