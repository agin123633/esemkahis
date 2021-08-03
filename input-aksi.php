<?php 
include 'koneksi.php';
$id = $_POST['Id'];
$nama = $_POST['Nama'];
$jenis_kelamin = $_POST['Jenis_Kelamin'];
$alamat = $_POST['alamat'];

$query=mysqli_query($db,"INSERT INTO datadiri VALUES('$id','$nama','$jenis_kelamin','$alamat')");

header("location:index.php?pesan=input");
?>