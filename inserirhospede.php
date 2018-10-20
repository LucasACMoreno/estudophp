<html>
<head><meta charset="UTF-8"><title>Banco de dados</title></head>
<body><p>Insere</body></p>
<?php 
 $conexao = mysql_connect("localhost","root","");
 mysql_select_db("hotel",$conexao);
 
extract ($_POST);
$sql = "INSERT INTO hospede VALUES ('$name','$origem','$destino')";
$insert = mysql_query($sql);
//var_dump($insert);exit;
if ($insert) {
    echo "deu bom";
} else {
    echo "deu ruim";
}

?>
</body>
</html>
	