<?php
  include "config.php";
  $id = $_GET['Id'];
  $sql = mysqli_query($koneksi,"SELECT * FROM biodata");
  $id = $_POST['Id'];
  $nama = $_POST['Nama'];
  $jk = $_POST['Jenis_Kelamin'];
  $alamat = $_POST['alamat'];
// Proses ubah data ke Database
mysqli_query($koneksi,"update siswa set Id='$id', Nama='$nama', Jenis_Kelamin='$jk',alamat='$alamat',  Id='$id'") or die( mysqli_error($koneksi) );
if($sql = mysqli_query){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); 
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='edit.php'>Kembali Ke Form</a>";
}
?>
