<?php
  include "config.php";
  $id = $_GET['id'];
  $sql = mysqli_query($koneksi,"SELECT * FROM siswa");
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jk = $_POST['jenis_kelamin'];
  $alamat = $_POST['alamat'];
// Proses ubah data ke Database
mysqli_query($koneksi,"update siswa set id='$id', nama='$nama', jenis_kelamin='$jk',alamat='$alamat',  id_pasien='$id'") or die( mysqli_error($koneksi) );
if($sql = mysqli_query){ // Cek jika proses simpan ke database sukses atau tidak
  // Jika Sukses, Lakukan :
  header("location: index.php"); 
}else{
  // Jika Gagal, Lakukan :
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='edit.php'>Kembali Ke Form</a>";
}
?>
