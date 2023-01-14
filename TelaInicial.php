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

/*     if(!empty($_GET['search']))
    {
        echo "contem algo, pesquisar";
    }
    else
    {
        $sql = "SELECT I "
    } */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundo Virtual</title>
    <link rel="stylesheet" href="TelaInicial.css">
</head>
<body>

    <?php
        echo "<h1>BEM VINDO <u>$logado</u>, ESPERO QUE SE DIVIRTA</h1>";
    ?>
    <div>
        <a href="sair.php" class="btn-sair">Sair</a>
    </div>
    <div>
        <a href="MeuPerfil/Perfil.php" class="btn-Perfil">Meu Perfil</a>
        <a class="bnt-Aplicativos" id="Detalhe" href="Funcionamento/aplicativos/Aplicativos.php">Aplicativos</a>
        <a class="btn-Jogos" id="Detalhe" href="Funcionamento/Jogos/Jogos.php">Jogos</a>
    </div>
    <script type="text/javascript" src="TelaInicial.js"></script>
        <script type="text/javascript">
	    VanillaTilt.init(document.querySelectorAll("#Detalhe"), {
		max: 25,
		speed: 400
	    });
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".your-element"));
</script>
</body>
</html>