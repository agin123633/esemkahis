<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
            <tr>
				<td>Id</td>
				<td><input type="text" name="Id"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>					
			</tr>	
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="Jenis_Kelamin" value="laki-laki">laki_laki
                <input type="radio" name="Jenis_Kelamin" value="perempuan">Perempuan</td>				
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>