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

    $sqlUpdata = "UPDATE cadastro SET Nome='$Nome', Senha='$Senha', Email='$Email', Data_Nasc='$Data_Nasc', Sexo'$Sexo', Senha'$Senha'WHERE ID=$ID";

    $result = $conexao->query($sqlUpdate);
    }

    header('location: Perfil.php')
?>