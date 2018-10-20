<html>
<head><meta charset="UTF-8"><title>listaemail</title>
<style type="text/css">
body { font-family: arial, sans-serif;
background-color: lightblue }
h3 {color: white}
table{background-color: lightgrey}
td {padding-top: 2px;
padding-bottom: 2px;
padding-left: 6px;
padding-right: 6px;
border-width: 1px;
border-style: outset}
</style>
</head>
<body>
<?php
extract($_POST);
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancodados = "listaemail";

$connection = new mysqli($servidor, $usuario, $senha, $bancodados);

if($connection->connect_error){
  die("conexao falhou");
}
$sql = "select * from contatos";
$result = $connection->query($sql);
?>

<h3>lista contatos</h3>
<table>
<tr>
<td>ID</td>
<td>SOBRENOME</td>
<td>NOME</td>
<td>EMAIL</td>
<td>TELEFONE</td>
</tr>
<?php
while($linha = $result->fetch_assoc()){
	print("<tr>");

	foreach($linha as $key => $value)
		print("<td>$value</td>");
		
	print("</tr>");
}
$connection->close();
?>
</table>
</body></html>