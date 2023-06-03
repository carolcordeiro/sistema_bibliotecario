<?php
session_start();
include("conexaoBD.php");

$p_cpf_f = $_POST['cpf_f'];
$p_nome = $_POST['nome'];
$p_senha = $_POST['senha'];

$sql = "INSERT INTO funcionario (cpf_f, nome_f, senha)
VALUES ('$p_cpf_f', '$p_nome', '$p_senha')";

if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = "Funcionário Cadastrado com Sucesso!";
        header("location: resultado_cadastramento.php");
    } else {
        $_SESSION['msg'] = "Erro ao Cadastrar Funcionário!";
        header("location: resultado_cadastramento.php");
    }

mysqli_close($conn);
?>