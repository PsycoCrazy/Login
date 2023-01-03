<?php
<<<<<<< HEAD
if(!empty($_GET['ID']))
    {

=======
    session_start();

     if(!empty($_GET['ID']))
     {
>>>>>>> develop
    include_once('../config.php');

    $ID = $_GET['ID'];

    $sqlSelect ="SELECT * FROM cadastro WHERE ID=$ID";

    $result = $conexao->query($sqlSelect);

<<<<<<< HEAD
    if($result->num_rows > 0)
    {
        $sqlSelect = "DELETE FROM cadastro WHERE ID=$ID";
        $resultDelete = $conexao->query($sqlSelect);
    }
}
    header('Location: Perfil.php');
=======
    if($result ->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cadastro WHERE ID=$ID";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: Perfil.php'); 
>>>>>>> develop
?>