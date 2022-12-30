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
    <div>
        <form action="Creat.php" method="POST">
            <fieldset class="grupo">
                    <label for="Nome"><strong>Nome:</strong></label>
                    <input type="text" name="Nome" id="nome" required>
            </br>
                <label for="Email"><strong>Email:</strong></label>
                <input type="text" name="Email" id="Email" required>
            </br>
                <label for="Data_Nasc"><strong>Data de Nascimento:</strong></label>
                <input type="text" name="Data_Nasc" id="Data_Nasc" required>
<<<<<<< HEAD
            </br>
                <label for="Sexo"><strong>Sexo:</strong></label>
                <input type="text" name="Sexo" id="Sexo">
            </br>
                <label for="Senha"><strong>Senha:</strong></label>
                <input type="password" name="Senha" id="Senha" required>
<!--             <label for="sexo"><strong>Sexo:</strong></label>
            <label>
                <input type="radio" name="Sexo" value="Sexo" checked>Feminino
            </label>
            <label>
                <input type="radio" name="Sexo" value="Sexo">Masculino -->
            </label>
<<<<<<< HEAD
                <button class="botao" type="submit" name="submit" id="submit">Enviar</button>
=======
            </br>
            <label for="Senha"><strong>Senha:</strong></label>
                <input type="password" name="Senha" id="Senha" required>
                <button class="botao" type="submit" id="submit">Enviar</button>
>>>>>>> develop
=======
                </br>
            <label for="sexo"><strong>Sexo:</strong></label>
                <input type="text" name="Sexo" id="Sexo" required>
<!--             <label>
                <input type="radio" name="Sexo" value="Sexo" checked>Feminino
            </label>
            <label>
                <input type="radio" name="Sexo" value="Sexo">Masculino
            </label> -->
            </br>
            <label for="Senha"><strong>Senha:</strong></label>
                <input type="password" name="Senha" id="Senha" required>
                <button class="botao" type="submit" name="submit" id="submit">Enviar</button>
>>>>>>> develop
            </fieldset>

        </form>

    </body>

    </html>
