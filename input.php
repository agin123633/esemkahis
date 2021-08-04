<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h1 align="center">Data Diri</h1>
	<form action="input-aksi.php" method="post">		
   
   <div class="container">
		<table class="content">
            
				<td>Id</td>
				<td><input type="text" name="Id"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama"></td>					
			</tr>	
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="Jenis_Kelamin" value="laki-laki">laki laki
                <input type="radio" name="Jenis_Kelamin" value="perempuan">Perempuan</td>				
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>					
			</tr>	
			<tr>
<div>
				<td ><input class="tombol" type="submit" value="Simpan"></td>	
</div> 				
			</tr>				
		</table>
    </div>
	</form>
</body>
</html>