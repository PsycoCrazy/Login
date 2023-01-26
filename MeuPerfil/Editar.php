<?php
    session_start();

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
                $Nome = $user_data['Nome'];
                $Email = $user_data['Email'];
                $Data_Nasc = $user_data['Data_Nasc'];
                $Sexo = $user_data['Sexo'];
                $Senha = $user_data['Senha'];
            }    
    }

    else
    {
        header('Location: Perfil.php');
    }

}
else
{
    header('location: Perfil.php');
}
?>



<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="Editar.css">
    <title>Editar</title>
</head>

<body>
    <div class="containers">
        <div>
            <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Editar.css" />
        </div>
        <div>
            <form action=""SaveEdit.php method="POST"> 
                <fieldset class="grupo">
                        <label for="Nome"><strong>Nome:</strong></label>
                        <input type="text" name="Nome" id="Nome" value="<?php echo $Nome ?>" required>
                </br>
                    <label for="Email"><strong>Email:</strong></label>
                    <input type="text" name="Email" id="Email" value="<?php echo $Email ?>" required>
                </br>
    <!--                 <label for="Senha"><strong>Senha:</strong></label>
                <input type="password" name="Senha" id="Senha" required>
            </br> -->
                <label for="Data_Nasc"><strong>Data de Nascimento:</strong></label>
                <input type="date" name="Data_Nasc" id="Data_Nasc" value="<?php echo $Data_Nasc ?>" required>
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
                <input type="hidden" name="ID" value="<?php echo $ID ?>">
                <button class="btn-enviar" type="submit" name="update" id="update">Enviar</button>
            </fieldset>
        </form>
    </div>
</body>

</html>
