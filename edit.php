
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
                include "config.php";
                $id = $_GET['id'];
                $query = mysqli_query($koneksi,"SELECT * FROM datadiri WHERE id='$id'")or die(mysqli_error());
                $nomor = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <form method="post" action="proses.php">
                <label for="id">Id </label>
                <input type="text" name="id" id="id" value="<?php echo $data['id']; ?>" /> 
                </br>
                <label>Nama </label>
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <input name="nama" id="nama" value="<?php echo $data['nama']; ?>" class="form-control" required autofocus/>
                <br />
                <label >Jenis Kelamin </label>
                <?php $jk = $data['jenis_kelamin']; ?>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
                <br />
                <label>Alamat</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']; ?>" />
                </br>
                <input type="submit" name="ubah" id="ubah" value="Ubah" class="btn btn-success" />
                <a href="index.php"><input type="button" value="Batal" class="btn btn-danger"></a>
            </form>
            <?php } ?></center>
    </body>
</html>

