<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Result Looping</title>
</head>

<body>
<a href="tugas_hari_ketiga1.php">Back</a> <br>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$siapa = $_POST["siapa"];
		$berapa = $_POST["berapa"];
		for($i=0; $i<$berapa; $i++){
			echo 'Saya Cinta '.$siapa;
			echo "<br/>";
		}
	}
	
?>
</body>
</html>