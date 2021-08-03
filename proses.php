<?php

include("config.php");

if(isset($_POST['tambah'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO siswa (id, nama, jenis_kelamin, alamat) VALUE ('$id','$nama', '$jk', '$alamat')";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
 
}elseif (isset($_POST['tambah'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE siswa SET id='$id', nama='$nama', jenis_kelamin='$jk', alamat='$alamat', WHERE id=$id";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>

