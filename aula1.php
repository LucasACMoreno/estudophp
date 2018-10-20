<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<title> converter tipos de dados</title>
</head>
<body>
<?php 

	$conteudostring = "3.5 segundos";
	$conteudodouble = 79.2;
	$conteudointeger = 12;
	
	print("$conteudostring e do tipo " . gettype($conteudostring). "<br/>");
	print("$conteudodouble e do tipo " . gettype($conteudodouble). "<br/>");
	print("$conteudointeger e do tipo " . gettype($conteudointeger). "<br/>");
?>
<br/>
Converter tipos de dados: <br/>
<?php
	print("$conteudostring")."<br/>";
	settype($conteudostring,"double");
	print("$conteudostring")."<br/>";
	settype($conteudostring,"integer");
	print("$conteudostring")."<br/>";
	settype($conteudostring,"string");

	$dados = "98.6 graus";
	printf("depois do casting, $dados e um ".gettype($dados)."<br/><br/>");
	print("usando casting: <br/> 
	e um double: ". (double) $dados .
		"<br/>e um integer: " . (integer) $dados);
	printf("<br/><br/>depois casting, $dados e um " .
	gettype($dados));
?>
</body>
</html>
