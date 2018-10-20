<html>
<head><meta charset="UTF-8"><title>Exibe info</title></head>

<body>
<?php

extract ($_POST);

$data = new DateTime($datanasc);
echo ("data nascimento ".$data-> format('d-m-Y')."");

?>

</body>
</html>