<?php
	$nilai = [
		'budi' => ['matematika' => 70, 'bahasa_indonesia' => 80, 'bahasa_inggris' => 90],
		'tono' => ['matematika' => 60, 'bahasa_indonesia' => 70, 'bahasa_inggris' => 80],
		'gadis' => ['matematika' => 55, 'bahasa_indonesia' => 75, 'bahasa_inggris' => 95],
	];
	
	echo 'Nilai matematika tono adalah '.$nilai['tono']['matematika'];
	
		echo '<br><br>Cetak menggunakan foreach : <br>';
	foreach ($nilai as $key => $value){
		foreach ($value as $k => $v){
			if ($v <=59)continue;
			if ($k =='bahasa_indonesia') continue;
			if ($k =='bahasa_inggris') continue;
			
			echo 'Nilai '.$k.' ' .$key.' adalah ' .$v.'<br>';
		}
	}