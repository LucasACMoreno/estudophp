<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodados = "concessionaria";

extract($_POST);
$fabricante = $_POST["ffabricante"];

$connection = new mysqli($servidor, $usuario, $senha, $bancodados);

if($connection->connect_error){
  die("conexao falhou");
}

$sql = "select * from veiculo where fabricante like '%$fabricante%'";
$result = $connection->query($sql);

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		echo "carro: " .$row["carro"]." fabricante: ".$row["fabricante"]. " " . "<br>";
	}
}else{
	echo "Nenhum resultado encontrado";
}

$connection->close();
?>