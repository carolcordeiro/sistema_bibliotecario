<?php
session_start();
include("conexaoBD.php");
$sql="SELECT * FROM livro";
$resul = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Acervo</title>
        <link href="css/acervo.css" rel="stylesheet">
    </head>
    <body>
        <h1><Strong>Acervo</Strong></h1>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Título</th>
                <th scope="col">Autor</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Edição</th>

            </tr>
        </thead>
        <tbody>
            <?php
                while($user= mysqli_fetch_assoc($resul)){
                    echo"<tr>";
                    echo"<td>".$user['isbn']."</td>";
                    echo"<td>".$user['titulo']."</td>";
                    echo"<td>".$user['autor']."</td>";
                    echo"<td>".$user['qntd']."</td>";
                    echo"<td>".$user['edicao']."</td>";
                    echo"</tr>";  
                }
            ?>
        </tbody>
        </table>
        <a href="principal_aluno.php"><button type="button">VOLTAR</button></a>
</body>
</html>