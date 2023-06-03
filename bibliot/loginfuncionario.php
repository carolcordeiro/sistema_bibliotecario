<?php

session_start();
include("conexaoBD.php");

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Sistema Bibliotecário</title>
        <link href="css/login.css" rel="stylesheet">
    </head>
    <body>
        <main>
            <form name="validacao" method="post" action="resp_login_func.php" >
                    <Strong><p>LOGIN FUNCIONÁRIO</p></Strong>
                    <div class="input">
                        <label> <Strong>CPF: </Strong></label> <br>
                        <input type='text' name='cpf_f' > <br>
                        <label> <Strong>Senha: </Strong></label> <br>
                        <input type='password' name='senha'> <br>
                    </div>
                    
                    <button type='submit' id='ok'>ENTRAR</button>
                    <a href="index.html"> <button type="button"> VOLTAR </button> </a>
            </form>
            
        </main>
    </body>
</html>