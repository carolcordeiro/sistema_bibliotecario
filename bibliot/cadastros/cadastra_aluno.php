<?php
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
        <title>Cadastrar Aluno</title>
        <link href="../css/cadastro.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <form name="cadastro_aluno" method="post" action="../resp_cadastro_aluno.php" >
                    <Strong><p>CADASTRAR ALUNO</p></Strong>
                    <div class="input">
                        <label> <Strong>Nome: </Strong></label> <br>
                        <input type='text' name='nome'> <br>
                        <label> <Strong>Matrícula: </Strong></label><br>
                        <input type='text' name='matricula' > <br>
                        <label> <Strong>Período: </Strong></label> <br>
                        <input type='text' name='periodo'> <br>
                        <label> <Strong>Data de Nascimento: </Strong></label> <br>
                        <input type='date' name='data_nas'> <br>
                        <label> <Strong>Endereço: </Strong></label> <br>
                        <input type='text' name='endereco'> <br>
                        <label> <Strong>Email: </Strong></label> <br>
                        <input type='text' name='email'> <br>
                        <label> <Strong>Senha: </Strong></label> <br>
                        <input type='password' name='senha'> <br>
                        <label> <Strong>CPF do funcionário: </Strong></label> <br>
                        <input type='text' name='cpf_f'> <br>
                    </div>
                    <div>
                        <button type='submit' id='ok'>CADASTRAR</button>
                    </div>
                    <a href="../principal_func.php"> <button type="button"> VOLTAR </button> </a>
            </form>
            
        </main>
    </body>
</html>