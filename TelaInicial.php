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
</head>
<body>

    <?php
        echo "<h1>BEM VINDO <u>$logado</u>, ESPERO QUE SE DIVIRTA</h1>";
    ?>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="Pesquisar">
        <button onclick="searchData()" class="btn btn-primary">search</button>
    </div>
    <div>
        <a href="sair.php" class="btn btn-sair">Sair</a>
    </div>
    <div>
        <a href="MeuPerfil/Perfil.php" class="btn btn-Perfil">Meu Perfil</a>
    </div>
    <script>
        var search = document.getElementById('Pesquisar');

        search.addEventListener("keydown", function(event){
            if (event.key === "Enter")
            {
                searchData();
            }
        });
        function searchData()
        {
            window.location = 'TelaInicial.php?search=' +search.value;
        }
    </script>
    <div>
        <a href="Funcionamento/aplicativos/Aplicativos.php">Aplicativos</a>
        <a href="Funcionamento/Jogos/Jogos.php">Jogos</a>
    </div>
</body>
</html>