<?php

include("config.php");

if(isset($_POST['tambah'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $sql = "INSERT INTO datadiri (id, nama, jenis_kelamin, alamat) VALUE ('$id','$nama', '$jk', '$alamat')";
    $query = mysqli_query($koneksi, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
 
}elseif (isset($_POST['ubah'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $query=mysqli_query($koneksi,"UPDATE datadiri SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id='$id'");

    header("location:index.php?pesan=update");
}

?>

