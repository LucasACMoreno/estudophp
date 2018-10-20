<?php
	$link = mysqli_connect("localhost", "root", "", "escola");
	
	$sql = "SELECT * FROM aluno";
	$result = mysqli_query($link, $sql);

	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row['nome'].'<br>';
		}
	} else {
		echo "0 results";
	}
	$link->close();
?>