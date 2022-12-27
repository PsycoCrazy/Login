<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="botao-voltar">
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Creat.css" />
    </div>
    <div>
        <form action="testLogin.php" method="POST">
            <input type = "text" class="inputs" name="Email" placeholder = "Email ou Usuário">
</br>
            <input type = "password" class="inputs"  name="Senha" placeholder ="Senha">
</br>
            <input class="botao" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>