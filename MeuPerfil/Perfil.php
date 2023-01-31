<?php
    session_start();
    include_once('../config.php');
    
    $sql ="SELECT * FROM cadastro";


    $result = $conexao->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Meu perfil</title>
=======
    <title>Document</title>
    <link rel="stylesheet" href="Perfil.css">
>>>>>>> develop
</head>
<body>
    <div class="containers">
    <div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
    <input type="hidden" name="ID" value="<?php echo $ID ?>">
    </div>
    <div class="m-5">
>>>>>>> develop
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Data_Nasc</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Senha</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['ID']."</td>";
                            echo "<td>".$user_data['Nome']."</td>";
                            echo "<td>".$user_data['Email']."</td>";
                            echo "<td>".$user_data['Data_Nasc']."</td>";
                            echo "<td>".$user_data['Sexo']."</td>";
                            echo "<td>".$user_data['Senha']."</td>";
                            echo "<td>
                                <a class='btn btn-editar' href='Editar.php?ID=$user_data[ID]';>Editar</a>
                                </td>";
                            echo "<td>
<<<<<<< HEAD
                                <a class='btn btn-delete' href='Delete.php?ID=$user_data[ID]';>Deletar</a>    
                            </td>";
                            echo "</tr>";
=======
                                <a class='btn btn-deletar' href='Editar.php?ID$user_data[ID]';>Deletar</a>
                            </td>";
                            echo "</tr>";   
>>>>>>> develop
                        }
                    ?>
                </tbody>
=======
        <input class="btn-home" type='button' value='Home' onclick='history.go(-1)' href="Perfil.css" />
    </div>
        <div>
            <input type="hidden" name="ID" value="<?php echo $ID ?>">
        </div>
        <div class="m-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Data_Nasc</th>
                        <th scope="col">Sexo</th>
                        <th scope="col">Senha</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>".$user_data['ID']."</td>";
                                echo "<td>".$user_data['Nome']."</td>";
                                echo "<td>".$user_data['Email']."</td>";
                                echo "<td>".$user_data['Data_Nasc']."</td>";
                                echo "<td>".$user_data['Sexo']."</td>";
                                echo "<td>".$user_data['Senha']."</td>";
                                echo "<td>
                                    <a class='btn btn-editar' href='Editar.php?ID=$user_data[ID]';>Editar</a>
                                    </td>";
                                echo "<td>
                                    <a class='btn btn-deletar' href='Editar.php?ID$user_data[ID]';>Deletar</a>
                            </td>";
                        echo "</tr>";   
                    }
                ?>
            </tbody>
>>>>>>> develop
        </table>
    </div>
</div>

</body>
</html>