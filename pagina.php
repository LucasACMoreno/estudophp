<html>
<head><meta charset="UTF-8"><title>Exibe info</title></head>

<body>
<?php

extract ($_POST);

echo ("form1 $month")."<br>";
echo ("form2 $qnt")."<br>";
echo ("form3 $qnt10")."<br>";
echo ("form4 $pontos")."<br>";

$data = new DateTime($dtantes);
echo (" form 5 data antes ".$data-> format('d-m-Y')."")."<br>";
$data = new DateTime($dtdps);
echo ("form 5 data depois ".$data-> format('d-m-Y')."");

?>

</body>
</html>