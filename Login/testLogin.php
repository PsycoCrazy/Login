<?php
    session_start();
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

/*         print_r($result); */
        if(mysqli_num_rows($result)< 1)
        {
            unset($_SESSION['Email']);
            unset($_SESSION['Senha']);
            header('Location: Login.php');
        }
        else
        {
            $_SESSION['Email'] = $Email;
            $_SESSION['Senha'] = $Senha;
            header('Location: ../TelaInicial.php');
        }

    }

    else{
        header('Location: Login.php');
    }

?>