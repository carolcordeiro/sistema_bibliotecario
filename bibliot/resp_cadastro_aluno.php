<?php
session_start();
include("conexaoBD.php");
$p_nome = $_POST['nome'];
$p_matricula = $_POST['matricula'];
$p_periodo = $_POST['periodo'];
$p_datanasc = $_POST['data_nas'];
$p_end = $_POST['endereco'];
$p_email = $_POST['email'];
$p_senha = $_POST['senha'];
$p_cpf_f = $_POST['cpf_f'];
$sql = "INSERT INTO aluno (matricula, nome, periodo, data_nas, endereço, email, cpf_f, senha)
VALUES ('$p_matricula','$p_nome','$p_periodo','$p_datanasc','$p_end', '$p_email','$p_cpf_f', '$p_senha')";
if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "Aluno Cadastrado com Sucesso!";
    header("location: resultado_cadastramento.php");
} else {
    $_SESSION['msg'] = "Erro ao Cadastrar Aluno!";
    header("location: resultado_cadastramento.php");
}

mysqli_close($conn);
?>