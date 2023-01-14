<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
    <div class="containers">
        <div class="botao-voltar">
            <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Creat.css" />
         </div>
            <p class="titulo">LOGIN IN VIRTUAL WORLD</p>
        <div>
            <form action="testLogin.php" method="POST">
                <label for="Email" id="Email"><strong>Email:</strong></label>
                <input type = "text" class="Email" name="Email">
                <label for="Senha" id="Senha"><strong>Senha:</strong></label>
                <input type="password" class="Senha"  name="Senha">
                <input class="btn-enviar" type="submit" name="submit" value="Enviar">
                <a class="btn-criar" type="submit" name="submit" href="../Creat/Creat.php">Criar Conta</a>
        </form>
    </div>
</div>
</body>
</html>