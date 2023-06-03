<?php
session_start();
include("conexaoBD.php");

$p_isbn = $_POST['isbn'];
$p_titulo = $_POST['titulo'];
$p_autor = $_POST['autor'];
$p_qntd = $_POST['qntd'];
$p_edicao = $_POST['edicao'];
$p_cpf_f = $_POST['cpf_f'];

$sql = "INSERT INTO livro (isbn,titulo,autor,qntd,edicao,cpf_f)
VALUES ('$p_isbn','$p_titulo','$p_autor','$p_qntd','$p_edicao','$p_cpf_f')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = "Livro Cadastrado com Sucesso!";
    header("location: resultado_cadastramento.php");
} else {
    $_SESSION['msg'] = "Erro ao Cadastrar Livro!";
    header("location: resultado_cadastramento.php");
}
mysqli_close($conn);
?>