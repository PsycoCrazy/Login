<?php
    
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

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen">
    <title>Cadastro</title>
</head>

<body>

    <div class="botao-voltar">
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Creat.css" />
    </div>
    <p class="titulo">CADASTRE-SE</p>
    <div>
        <form action="Creat.php" method="POST">
            <fieldset class="grupo">
                <label for="Nome" class="Nome"><strong>Nome:</strong></label>
                <input type="text" name="Nome" id="Nome" required>
                <br/>
                <label for="Email" class="Email"><strong>Email:</strong></label>
                <input type="text" name="Email" id="Email" required>
                <br/>
                <label for="Data_Nasc" class="Data_Nasc"><strong>Data de Nascimento:</strong></label>
                <input type="date" name="Data_Nasc" id="Data_Nasc" required>
                <br/>
                <label for="Sexo" class="Sexo"><strong>Sexo:</strong></label>
                <input type="text" name="Sexo" id="Sexo">
                <br/>
                <label for="Senha" class="Senha"><strong>Senha:</strong></label>
                <input type="password" name="Senha" id="Senha" required>
                <br/>
            </fieldset>
            <div class="btn-form">
                <button class="btn-enviar" type="submit" name="submit" id="submit">Enviar</button>
                <button class="btn-limpar" type="reset" name="reset" id="submit">Limpar</button>
            </div>
        </form>

    </body>

    </html>
