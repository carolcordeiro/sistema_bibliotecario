<?php
include("conexaoBD.php");
$p_cpf_f= $_POST ["cpf_f"];
$p_senha= $_POST ["senha"];
$sql = "SELECT cpf_f, senha FROM funcionario WHERE cpf_f ='$p_cpf_f' && senha ='$p_senha'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {   /*saída de dados de cada coluna */
    header("location: principal_func.php");
} else {
    $_SESSION['erro'] = "Erro ao tentar fazer Login!";
    header("location: erro_loguin.php");
}
$conn->close();
?>