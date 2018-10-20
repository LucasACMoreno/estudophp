<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>FORMULÁRIO</title>
	<style type ="text/css">
		div {text-align: center;}
		div div{font-size: larger;}
		.prompt{color: blue;
				font-family: sans-serif;
				font-size: smaller}
		.avisoerro{color: red;}
		.smalltext{font-size: smaller}
		.error{color: red;
			font-size: smaller;}
	</style>
</head>
<body>
	<?php
	extract($_POST);
	$falha = false;

	$listalivros = array("Java como programar", "Use a cabeça Java", "c# como programar", "use a caebça c#");
	$listasistemas = array("windows xp","linux","MAC OS","VISTA","outros");
	$camposform = array(
		"fname"=>"Nome",
		"lname"=>"Sobrenome",
		"email"=>"Email",
		"phone"=>"fone"
	);

	if(isset($submit)){

		$formerrors["fnameerror"] = false;
		if($fname == ""){
			$formerrors["fnameerror"] = true;
			$falha = true;
			echo "AAAAAAAAAAAAAAAAAAA";
		}
		$formerrors["lnameerror"] = false;
		if($lname == ""){
			$formerrors["lnameerror"] = true;
			$falha = true;
			echo "BBBBBBBBBBBBBBBBBB";
		}
		$formerrors["emailerror"] = false;
		if($email == ""){
			$formerrors["emailerror"] = true;
			$falha = true;
			echo "CCCCCCCCCCC";
		}
		$formerrors["phoneerror"] = false;
		if(!preg_match("/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/", $phone)){
			$formerrors["phoneerror"] = true;
			$falha = true;echo "DDDDDDDDDDDDDD";
		}

		if(!$falha){}
	}

	printf("<h1>Registro de dados<h1>
			por favor preencha todos os campos e clique em registrar.");
	if($falha){
		print("<br><span class = 'avisoerro'>
				Os campos com * são obrigatórios.</span>");
	}
	print("
		<form method = 'post' action='testeform.php'>
		<h3>Informações do usuário</h3>
		<span class= 'prompt'>
		Por favor, preencha os campos abaixo. <br></span>
		");

	foreach($camposform as $inputname => $inputalt){
		print("$inputalt <input type = 'text'
			name = '$inputname' value = '" . (isset($$inputname) ? $$inputname : '') . "' />");

		if(isset($formerrors) && $formerrors[($inputname) . "error"] == true )
			print("<span class = 'error'>*</span>");
		print("<br>");
	}

	if(isset($formerrors) && $formerrors["phoneerror"])
		print("<span class = 'error'>");
	else
		print("<span class = 'smalltext'>");

	print("Este deve ser o formato correto (555)555-5555
		</span><br><br>
		<h3>Publicações</h3>
		<span class='prompt'>
		Qual livro gostaria de informações!
		</span><br>

		<select name='livros'>");

	foreach($listalivros as $livrocorrente){
		printf("<option");
		if(isset($livros) && ($livrocorrente == $livros))
			print("select = 'true'");

		print(">$livrocorrente</option>");
	}

	print("</select><br><br>
		<h3>Sistemas operacionais</h3>
		<br><span class ='prompt'>
		Qual sistema operacional voce está usando atualmete?
		<br></span>");

	$counter = 0;

	foreach($listasistemas as $sistemacorrente){
		print("<input type = 'radio' name = 'os'
			value = '$sistemacorrente'");
		if(isset($os) && ($sistemacorrente == $os))
			print("checked = 'checked'");
		else if(isset($os) && !$os && $counter == 0)
			print("checked = 'checked'");

		print("/>$sistemacorrente");

		if($counter == 1) 
			print("<br/>");
		++$counter;

	}

	print("<br><input type='submit' name='submit'
		value='Registrar'/></form></body></html>");

	
	?>