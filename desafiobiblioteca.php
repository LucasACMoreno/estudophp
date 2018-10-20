<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodados = "biblioteca";

extract($_POST);
$opt = $_POST['opt'];
//echo $opt;

$connection = new mysqli($servidor, $usuario, $senha, $bancodados);

if($connection->connect_error){
  die("conexao falhou");
}

$sql = "select $opt from tabela";
//echo $sql;
$result = $connection->query($sql);

echo '
	<h3>LISTAGEM</h3>
	<table>
';
$cont = 0;
while($linha = $result->fetch_assoc()){
	print("<tr>");
	if ($cont == 0) {
		foreach($linha as $key =>$teste){
			echo "<td>$key</td>";
		}		
	}
	print("</tr>");
	print("<tr>");
	$cont++;
	foreach($linha as $key => $value){
		print("<td>$value</td>");
	}
	print("</tr>");
}

echo '
	</table>	
';

$connection->close();
?>