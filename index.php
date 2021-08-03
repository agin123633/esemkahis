<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
    <h1 align="center">Data Diri</h1>
	<table border="1" align="center">
    <a class="" href="input.php" >Tambah Data</a>
    
		<tr>
			<th>No</th>
			<th>Id</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>alamat</th>		
            <th>Aksi</th>
		</tr>
		<?php 
		include "koneksi.php";
		$query = mysqli_query($db,"SELECT * FROM datadiri ORDER by id");
		$nomor = 1;
		while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['Id']; ?></td>
			<td><?php echo $data['Nama']; ?></td>
			<td><?php echo $data['Jenis_Kelamin']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['Id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['Id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>