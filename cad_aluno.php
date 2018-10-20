<html>
<head><meta charset="UTF-8"><title>Cadastro Aluno</title></head>

<body>
<?php

extract ($_POST);
$datacad = new DateTime($dtcad);
echo ("Nome: $name"."<br>"."Data do cadastro:".$datacad-> format('d-m-Y')."<br>"."Idade: $idade"."<br>");


?>

</body>
</html>