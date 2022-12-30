<?php
    include_once('../config.php');

    if(isset($_POST['update']))
    {  
                $ID = $_POST['ID'];
                $Nome = $_POST['Nome'];
                $Email = $_POST['Email'];
                $Data_Nasc = $_POST['Data_Nasc'];
                $Sexo = $_POST['Sexo'];
                $Senha = $_POST['Senha'];

                $sqlUpdate = "UPDATE cadastro SET Nome='$Nome', Email='$Email', Data_Nasc='$Data_Nasc', Sexo='$Sexo', Senha='$Senha' WHERE ID='$ID'";

                $result=$conexao->query($sqlUpdate);
    }

    header('Location: ../TelaInicial.php');
?>