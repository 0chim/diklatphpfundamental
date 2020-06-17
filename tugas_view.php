<?php
//create database connection using config file
include_once ("tugas_koneksi.php");

//Fetch all users data from database
$result = mysqli_query ($connect, "SELECT * FROM siswa");
?>

<html>
<head>
	<title>Data Siswa</title>
</head>


<body>
<br>
<a href="tugas_tambah.php">Tambah Data Siswa</a><br/><br/>
		<table width='80%' border=1>
			<tr>
				<th>No</th>
				<th>Nomor Induk</th>
				<th>Nama</th>
				<th>Nomor Telepon</th>
				<th>Alamat</th>
			</tr>
			
			<?php
				$no = 1;
				while ($user_data = mysqli_fetch_array($result)){
					echo "<tr>";
					echo "<td>".$no++."</td>";
					echo "<td>".$user_data['no_induk']."</td>";
					echo "<td>".$user_data['nama']."</td>";
					echo "<td>".$user_data['no_telepon']."</td>";
					echo "<td>".$user_data['alamat']."</td>";
					echo "</tr>";
				}
			?>
		
		</table>
</body>
</html>