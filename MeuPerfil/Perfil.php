<?php
    session_start();
    include_once('../config.php');
    
    $sql ="SELECT * FROM cadastro";


    $result = $conexao->query($sql);

/*     print_r($result); */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
        </table>
    </div>


</body>
</html>