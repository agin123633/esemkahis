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
        <a href="add.php"><input type="button" value="Tambah Data" class="btn btn-danger"></a>
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
                            $sql = mysqli_query ($koneksi, "SELECT * FROM datadiri") or die (mysqli_error($koneksi));
                            while ($data = mysqli_fetch_array($sql)) {
                        ?>
                        <tr>
                            <td align="center"><?php echo $no++; ?></td>
                            <td><?php echo $data["id"]; ?></td>
                            <td><?php echo $data["nama"]; ?></td>
                            <td><?php echo $data["jenis_kelamin"]; ?></td>
                            <td><?php echo $data["alamat"]; ?></td>
                            <td align="center">
                                <a class="edit" href="edit.php?id=<?php echo $data['id']; ?>"><input type="button" value="Edit" class="btn btn-warning"></a>
                                <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="hapus.php?id=<?php echo $data['id']; ?>" ><input type="button" value="Delete" class="btn btn-danger"></a>
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
