<html>
<head><meta charset="UTF-8"><title>Banco de dados</title></head>
<body><p>Consulta</body></p>
<?php 
 $conexao = mysql_connect("localhost","root","");
 mysql_select_db("hotel",$conexao);
 
 $consulta = mysql_query("select * from hospede");
 
echo 'Hóspedes do Hotel <br>';
while($campo = mysql_fetch_array($consulta)){
	$nome = $campo['nome'];
	echo 'nome: '.$nome.'<br>';
	
	$cidade = $campo['cidadeorigem'];
	echo 'cidade: '.$cidade.'<br>';
}
?>
</body>
</html>
	