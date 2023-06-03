<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>Erro ao Logar</title>
      <link href="css/resultado_c.css" rel="stylesheet">
  </head>
  <body>
    <main>
        <p>
           <strong> <?php echo $_SESSION['erro'];?> </strong>
        </p>
        <a href="index.html"> <button type="button"> VOLTAR </button> </a>
    </main>
    
  </body>
</html>