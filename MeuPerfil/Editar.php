<?php
    if(!empty($_GET['ID']))
    {

    include_once('../config.php');

    $ID = $_GET['ID'];

    $sqlSelect ="SELECT * FROM cadastro WHERE ID=$ID";

    $result = $conexao->query($sqlSelect);

    if($result ->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
            {
                $Nome = $_POST['Nome'];
                $Email = $_POST['Email'];
                $Data_Nasc = $_POST['Data_Nasc'];
                $Sexo = $_POST['Sexo'];
                $Senha = $_POST['Senha'];
            }    
    }

    else
    {
        header('Location: Perfil.php');
    }

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
        <form>
            <fieldset class="grupo">
                    <label for="Nome"><strong>Nome:</strong></label>
                    <input type="text" name="Nome" id="nome" value="<?php echo $Nome ?>" required>
            </br>
                <label for="Email"><strong>Email:</strong></label>
                <input type="text" name="Email" id="Email" value="<?php echo $Email ?>" required>
            </br>
<!--                 <label for="Senha"><strong>Senha:</strong></label>
                <input type="password" name="Senha" id="Senha" required>
            </br> -->
                <label for="Data_Nasc"><strong>Data de Nascimento:</strong></label>
                <input type="text" name="Data_Nasc" id="Data_Nasc" value="<?php echo $Data_Nasc ?>" required>
                </br>
            <label for="sexo"><strong>Sexo:</strong></label>
                <input type="text" name="Sexo" id="Sexo" value="<?php echo $Sexo ?>" required>
<!--             <label>
                <input type="radio" name="Sexo" value="Sexo" checked>Feminino
            </label>
            <label>
                <input type="radio" name="Sexo" value="Sexo">Masculino
            </label> -->
            </br>
            <label for="Senha"><strong>Senha:</strong></label>
                <input type="password" name="Senha" id="Senha" value="<?php echo $Senha ?>" required>
                <button class="botao" type="submit" name="submit" id="submit">Enviar</button>
            </fieldset>

        </form>

    </body>

    </html>
