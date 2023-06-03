<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "biblioteca";

$conn = new mysqli($host, $usuario, $senha, $bd);


if($conn -> connect_error){
    echo "Falha na conexão: (".$conn -> connect_error.")<br>";
}
//echo "Conectado com sucesso!<br>";


?>