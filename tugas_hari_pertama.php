<html> 
<body> 
<?php 
//If Else
	
	echo "Metode IF ELSE <br>";
	$nilai_grade = 80;
	echo 'Nilai Anda = '.$nilai_grade.'<br>';
	/*
	Persyaratannya :
	Grade < 60 = Tidak Lulus
	Grade 60 sd 69 = C
	Grade 70 sd 79 = B
	Grade 80 sd 100 = A
	*/
	
	if ($nilai_grade <60) {
		echo 'Anda Tidak Lulus dan Harus Mengulang Kembali Minggu Depan <br><br>';
	} else if ($nilai_grade >=60 && $nilai_grade <=69) {
		echo 'Anda Masuk dalam Kategori C <br><br>';
	} else if ($nilai_grade >=70 && $nilai_grade <=79) {
		echo 'Anda Masuk dalam Kategori B <br><br>';
	} else if ($nilai_grade >=80 && $nilai_grade <=100) {
		echo 'Anda Masuk dalam Kategori A <br><br>';
	}
	
//Switch Case

	echo "Metode SWITCH CASE <br>";
	$nilai_grade2 = 30;
	echo 'Nilai Anda = ' .$nilai_grade2,'<br>';
	
	switch ($nilai_grade2)
	{ 
		case 59 : 
			echo 'Anda Tidak Lulus dan Harus Mengulang Kembali Minggu Depan';
			break;
		case 60 : 
			echo 'Anda Masuk dalam Kategori C <br><br>';
			break;
		default :
			echo 'Maaf nilai anda tidak memenuhi persyaratan';
			
	} 
	
?> 
</body> 
</html>