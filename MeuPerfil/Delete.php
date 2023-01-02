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
            $sqlDelete = "DELETE FROM cadastro WHERE ID=$ID";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: Perfil.php'); 
?>