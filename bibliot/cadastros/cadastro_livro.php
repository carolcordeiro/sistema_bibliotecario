
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
            <form name="validacacadastro" method="post" action="../resp_cadastro_livro.php" >
                    <Strong><p>CADASTRAR LIVRO</p></Strong>
                    <div class="input">


                        <label> <Strong>ISBN: </Strong></label><br>
                        <input type='int' name='isbn' ><br>
                        <label> <Strong>Título: </Strong></label><br>
                        <input type='text' name='titulo' ><br>
                        <label> <Strong>Autor: </Strong></label><br>
                        <input type='text' name='autor' ><br>
                        <label> <Strong>Quantidade: </Strong></label><br>
                        <input type='int' name='qntd' ><br>
                        <label> <Strong>Edição: </Strong></label><br>
                        <input type='text' name='edicao' ><br>
                        <label> <Strong>CPF: </Strong></label><br>
                        <input type='text' name='cpf_f' ><br>
                        
                    </div>
                    
                    <button type='submit' id='ok'>CADASTRAR</button>
                    <a href="../principal_func.php"> <button type="button"> VOLTAR </button> </a>
                  
            </form>
            
        </main>
    </body>
</html>
