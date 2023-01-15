<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Aplicativos.css">
    <title>Mundo Virtual - Aplicativos</title>
</head>
<body>
    <div>
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)'/>
    </div>
    <div class="containers">
    <a class="btn-calculadora" id="Detalhe" href="Calculadora/indexCalculadora.php">Calculadora</a>
    <script type="text/javascript" src="../Jogos/Jogos.js"></script>
    <script type="text/javascript">
    VanillaTilt.init(document.querySelectorAll("#Detalhe"), {
    max: 25,
    speed: 400
    });

//It also supports NodeList
    VanillaTilt.init(document.querySelectorAll(".your-element"));
</script>
</div>
</body>
</html>