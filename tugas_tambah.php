<html>
<head>
	<title>Add Siswa</title>
</head>


<body>
	<a href="tugas_view.php">Lihat Data Siswa</a>
	<br/><br/>
	
	<form action="tugas_tambah.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Nomor Induk</td>
				<td><input type="text" name="no_induk"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="no_telepon"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="Add">
				</td>
			</tr>
		</table>
	</form>
			
	<?php
	
	//check If form submitted, insert form data into users table.
	if (isset($_POST['submit'])){
		$no_induk = strtoupper($_POST['no_induk']);
		$nama = strtoupper($_POST['nama']);
		$no_telepon = strtoupper($_POST['no_telepon']);
		$alamat = strtoupper($_POST['alamat']);
		
		//include database connection file
		include_once("tugas_koneksi.php");
		
		$result = mysqli_query($connect, "INSERT INTO siswa(no_induk,nama,no_telepon,alamat) VALUES('$no_induk','$nama','$no_telepon','$alamat')");
		// insert user data into table
	
		//show message when user added
		echo "Siswa added succesfully. <a href='tugas_view.php'>View Siswa</a>";
	}
			
	?>
		
</body>
</html>