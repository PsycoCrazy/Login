<?php

/*     print_r($_REQUEST);
 */
    if(isset($_POST['submit']) && !empty($_POST['Email']) && !empty($_POST['Senha']))
    {
        include_once ('../config.php');
        $Email = $_POST['Email'];
        $Senha = $_POST['Senha'];

/*         print_r('Email: . $Email');
        print_r('<br>');
        print_r('Senha: . $Senha'); */

        $sql = "SELECT * FROM cadastro WHERE email = '$Email' and senha = '$Senha' ";

        $result = $conexao->query($sql);

        print_r($result);
    }

    else{
        header('Location: Login.php');
    }

?>