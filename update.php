<?php 

include 'koneksi.php';
$id = $_POST['Id'];
$nama = $_POST['Nama'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];
$alamat = $_POST['alamat'];

$query=mysqli_query($db,"UPDATE datadiri SET Nama='$nama', Jenis_Kelamin='$jenis_kelamin', alamat='$alamat' WHERE id='$id'");

header("location:index.php?pesan=update");

?>