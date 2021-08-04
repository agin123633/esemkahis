<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h1 align="center">Edit Data</h1>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query = mysqli_query($db,"SELECT * FROM datadiri WHERE Id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query)){
	?>
	<form action="update.php" method="post">	
	<div class="container">
		<table class="content">	
		
            <tr>
                <td>Id</td>
                <td>
                    <input type="text" name="Id" value="<?php echo $data['Id'] ?>">
                </td>
            </tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="Nama" value="<?php echo $data['Nama'] ?>">
				</td>					
			</tr>	
			<tr>	
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="Jenis_Kelamin" value="laki-laki">laki_laki
                <input type="radio" name="Jenis_Kelamin" value="perempuan">Perempuan</td>				
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>
									
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan">
                <input type="submit" value="Kembali"></td>	
								
			</tr>				
		</table>
	</div>
	</form>
	<?php } ?>
</body>
</html>