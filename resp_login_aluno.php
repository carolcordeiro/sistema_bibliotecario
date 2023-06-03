<?php
session_start();

include("conexaoBD.php");

$p_matricula= $_POST ["matricula"];
$p_senha= $_POST ["senha"];
$sql = "SELECT matricula, senha FROM aluno WHERE matricula='$p_matricula' && senha='$p_senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {   /*saída de dados de cada coluna */
    while ($row = $result->fetch_assoc()) {
        echo "Bem vindo! <br>";
        header("location: principal_aluno.php");
    }
} else {
    $_SESSION['erro'] = "Erro ao tentar fazer Login!";
    header("location: erro_loguin.php");
}

$conn->close();
?>