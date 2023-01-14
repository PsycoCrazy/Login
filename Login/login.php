<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="botao-voltar">
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Creat.css" />
    </div>
    </div>
    <p class="titulo">LOGIN IN VIRTUAL WORLD</p>
    <div>
    <div>
        <form action="testLogin.php" method="POST">
            <label for="Email" id="Email"><strong>Email:</strong></label>
            <input type = "text" class="Email" name="Email">
</br>
            <label for="Senha" id="Senha"><strong>Senha:</strong></label>
            <input type = "password" class="Senha"  name="Senha">
</br>
            <input class="btn-enviar" type="submit" name="submit" value="Enviar">
            <button class="btn-criar" type="submit" name="submit" id="submit">Criar Conta</button>
        </form>
    </div>
</body>
</html>