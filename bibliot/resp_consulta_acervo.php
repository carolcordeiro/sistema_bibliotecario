<?php
include("conexaoBD.php");

$p_titulo = $_POST['titulo'];
$p_autor = $_POST['autor'];

$sql = "SELECT titulo, autor FROM livro WHERE titulo='$p_titulo' || autor='$p_autor'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {   /*saída de dados de cada coluna */
    while ($row = $result->fetch_assoc()) {
        echo "livro encontrado <br>";

        echo "<table>";
	echo "<tr><td>Título </td><td>Autor</td></tr><br>";
	foreach($result as $p_titulo => $p_autor){
		print "<tr><td>$p_titulo </td><td>$p_autor</td></tr><br>";
	}
	echo "</table>";

    }
} else {
    echo " 0 resultados";
}
$conn->close();
?>