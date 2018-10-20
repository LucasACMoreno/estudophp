<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>Array manipulador</title>
</head>
<body>
<?php 
	print("Desafio <br/> <br/>");
	$primeiro[0] = "Mesa";
	$primeiro[1] = "Cadeira";
	$primeiro[2] = "Sofá";
	$primeiro[3] = "Fogão";
	
	
	for($i = 0;$i < count($primeiro);$i++)
		print("O produto $i é $primeiro[$i] <br/>");
		
?>
</body>
</html>
