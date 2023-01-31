<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Jogos.css">
    <title>MUNDO VIRTUAL - JOGOS</title>
</head>
<body>
    <div>
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Jogos.css" />
    </div>
    <div class="containers">
        <div>
        <a class="bnt-planeta" id="Detalhe" href="Planeta/Planeta.php">Save The Planet</a>
        <a class="velha" id="Detalhe" href="JogoDaVelha/Velha.php">Jogo da Velha</a>
        <a class="forca" id="Detalhe" href="JogoDaForca/Forca.php">Jogo Da Forca</a>
        <a class="Bird" id="Detalhe" href="Bird/Bird.php">Flappy Bird</a>
        </div>
    </div>
    <script type="text/javascript" src="Jogos.js"></script>
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