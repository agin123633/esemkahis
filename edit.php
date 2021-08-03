<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query = mysqli_query($db,"SELECT * FROM datadiri WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query)){
	?>
	<form action="update.php" method="post">		
		<table>
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
				<td><input type="text" name="Jenis_Kelamin" value="<?php echo $data['Jenis_Kelamin'] ?>"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>