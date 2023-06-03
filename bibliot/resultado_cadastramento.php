<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset = "utf-8">
      <title>Cadastramento</title>
      <link href="css/resultado_c.css" rel="stylesheet">
  </head>
  <body>
    <main>
        <p>
           <strong> <?php echo $_SESSION['msg'];?> </strong>
        </p>
        <a href="principal_func.php"> <button type="button"> VOLTAR </button> </a>
    </main>
    
  </body>
</html>