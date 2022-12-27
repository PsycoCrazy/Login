<?php
session_start();

//require ('header.php');


?>

<style>
    .input label {
        display: flex;
        flex-direction: column;
    }

    form {
        display: flex;
        flex-direction: column;
        width: 30vh;
        gap: 10px;
    }

    #submit {
        width: 30%;
    }

    .container {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100%;
        background-color: blanchedalmond;
    }
    .box{
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #ae55e8;
        width: 20%;
        height: 300px;
        border-radius: 10px;
        box-shadow:  rgb(85, 91, 255) 0px 0px 0px 3px, rgb(31, 193, 27) 0px 0px 0px 6px, rgb(255, 217, 19) 0px 0px 0px 9px, rgb(255, 156, 85) 0px 0px 0px 12px, rgb(255, 85, 85) 0px 0px 0px 15px;
    }
</style>

<div class="container">
    <div class="box">
        <form action="">
            <div class="input">
                <label>
                    Nome:
                    <input type="text" name="nome" />
                </label>
            </div>
            <div class="input">
                <label>
                    Senha:
                    <input type="password" name="senha" />
                </label>
            </div>
            <input id="submit" type="submit" name="enviar">

        </form>
    </div>
</div>

<?php
    $nome = filter_input(INPUT_POST, 'nome');
    $senha = filter_input(INPUT_POST, 'senha');

    if($nome && $senha) {

    }
    else {
        header("location: index.php");
        exit;
    }

?>
<?php
if (isset($_GET['enviar'])) {
    echo "ola Mundo";
    header('Location:../index.php');
}
?>