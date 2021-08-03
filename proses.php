<?php

include("config.php");

if(isset($_POST['tambah'])){

    $id = $_POST['Id'];
    $nama = $_POST['Nama'];
    $jk = $_POST['Jenis_Kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO datadiri (Id, Nama, Jenis_Kelamin, alamat) VALUE ('$id','$nama', '$jk', '$alamat')";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
 
}elseif (isset($_POST['tambah'])){

    $id = $_POST['Id'];
    $nama = $_POST['Nama'];
    $jk = $_POST['Jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE biodata SET Id='$id', Nama='$nama', Jenis_Kelamin='$jk', alamat='$alamat', WHERE id=$id";
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

