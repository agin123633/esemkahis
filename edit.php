
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Data Diri</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <center>
            <h2>Tambah Data</h2>
            <?php
                include 'config.php';
                $id = isset ($array['id']) ? $array['id']:'';
                $sql = mysqli_query($koneksi,"SELECT * FROM datadiri WHERE id='$id'") or die ;(mysqli_error($koneksi));
                $data = mysqli_fetch_array($sql)
            ?>
            <form method="post" action="proses.php">
                <label for="id">Id </label>
                <input type="text" name="id" id="id" value="<?php echo $data['id']; ?>" /> 
                </br>
                <label>Nama Obat</label>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input name="nama" id="nama" value="<?php echo $data['nama']; ?>" class="form-control" required autofocus/>
                <br />
                <label >Jenis Kelamin </label>
                <?php $jk = $data['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
                <br />
                <label>Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" required><?php echo $data['ket_obat']; ?></textarea>
                </br>
                <input type="submit" name="edit_obat" value="Simpan" class="btn btn-success" />
                <a href="data_obat.php"><input type="button" value="Batal" class="btn btn-danger"></a>
            </form>
                <form  action="proses.php" method="post" >
                    <table border="0">
                    <tr>
                    <td>
                        
                        <td><td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="nama">Nama </label>
                        <td><td>
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jenis_kelamin">Jenis Kelamin </label>
                        <td><td>
                        <?php $jk = $data['jenis_kelamin']; ?>
                        <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat </label>
                        <td><td>
                        <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"/>
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type="submit" name="ubah" id="ubah" value="Ubah" class="btn btn-success" />
                    <a href="index.php"><input type="button" value="Batal" class="btn btn-danger"></a>
                    </td>
                </tr>
                    </table>
                </form>
        </center>
    </body>
</html>

