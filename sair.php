<?php
    session_start();
    unset($_SESSION['Email']);
    unset($_SESSION['Senha']);
    header('Location: Login\Login.php')

?>