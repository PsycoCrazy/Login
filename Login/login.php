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
        <div class="title">
            <span>Veneno Store</span>
            <div class="botao-voltar">
                <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Creat.css" />
            </div>
        </div>
        <div class="box">
            <div class="login">
                <div class="login-title">
                    <span>Login</span>
                </div>
                <div class="login-body">
                    <form action="testLogin.php" method="POST">
                        <input type="text" class="inputs" name="Email" placeholder="Email ou Usuário">

                        <input type="password" class="inputs" name="Senha" placeholder="Senha">

                        <input class="botao" type="submit" name="submit" value="Entrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>