<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Diri</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <center>
            <h2>Data Diri</h2></br>
        </center>
        <div >
        <button type="button" class="btn btn-warning "><a href="add.php">Tambah Data</a></button>
        </div>
        </br>
        <form action="POST">
            <div class="table-responsive">
                <table border="1" width="100%">
                    <thead>
                        <tr align="center">
                            <td>No</td>
                            <td>Id</td>
                            <td>Nama</td>
                            <td>Jenis Kelamin</td>
                            <td>Alamat</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include 'config.php';
                            $no = 1;
                            $sql = mysqli_query ($koneksi, "SELECT * FROM siswa") or die (mysqli_error($koneksi));
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data["id"]; ?></td>
                            <td><?php echo $data["nama"]; ?></td>
                            <td><?php echo $data["jenis_kelamin"]; ?></td>
                            <td><?php echo $data["alamat"]; ?></td>
                            <td align="center">
                                <button type="button" class="btn btn-warning "><a href="edit.php">Edit</a></button>
                                <button type="button" class="btn btn-danger "><a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger" > Delete</a></button>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </body>
</html>
