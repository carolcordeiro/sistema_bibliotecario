
<?php

session_start();
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "biblioteca";

$conn = new mysqli($host, $usuario, $senha, $bd);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Sistema Bibliotecário</title>
        <link href="../css/cadastro.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <form name="cadastrofuncionario" method="post" action="../resp_cadastro_func.php" >
                    <Strong><p>CADASTRAR FUNCIONARIO</p></Strong>
                    <div class="input">
                        <label> <Strong>Nome: </Strong></label> <br>
                        <input type='text' name='nome' > <br>
                        <label> <Strong>CPF: </Strong></label> <br>
                        <input type='text' name='cpf_f' > <br>
                        <label> <Strong>Senha: </Strong></label> <br>
                        <input type='password' name='senha'> <br>
                    </div>
                    
                    <button type='submit' id='ok'>CADASTRAR</button>
                    <a href="../principal_func.php"> <button type="button"> VOLTAR </button> </a>
                  
            </form>
            
        </main>
    </body>
</html>