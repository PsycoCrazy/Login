<?php
    if(isset($_POST['submit']))
    {
/*     {
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['telefone']);
    } */
    include_once('config.php');

    $Nome = $_POST['Nome'];
    $Email = $_POST['Email'];
    $Senha = $_POST['Senha'];
    $Sexo = $_POST['Sexo'];

    $result = mysqli_query($conexao, "INSERT INTO formulario (Nome, Email, Senha, Sexo) VALUES('$Nome', '$Email', '$Senha', '$Sexo')");

    }
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Cadastro</title>
</head>

<body>
    <div>
        <form action="Creat.php" method="POST">
            <fieldset class="grupo">
                    <label for="Nome"><strong>Nome:</strong></label>
                    <input type="text" name="Nome" id="nome" required>
            </br>
                <label for="Email"><strong>Email:</strong></label>
                <input type="text" name="Email" id="Email" required>
            </br>
<!--                 <label for="Senha"><strong>Senha:</strong></label>
                <input type="password" name="Senha" id="Senha" required>
            </br> -->
                <label for="Data_Nasc"><strong>Data de Nascimento:</strong></label>
                <input type="text" name="Data_Nasc" id="Data_Nasc" required>
                </br>
            <label for="sexo"><strong>Sexo:</strong></label>
            <label>
                <input type="radio" name="Sexo" value="Sexo" checked>Feminino
            </label>
            <label>
                <input type="radio" name="Sexo" value="Sexo">Masculino
            </label>
                <button class="botao" type="submit" id="submit">Enviar</button>
            </fieldset>

        </form>

    </body>

    </html>
