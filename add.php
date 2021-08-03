<!DOCTYPE html>
<html>
    <head>
        <title> Tambah Data Diri</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
            <center>
                <h2> Tambah Data Diri</h2></br>
            
<fieldset>
        <form action="proses.php" method="POST">

            
            <table border="0">
                <tr>
                    <td>
                        <label for="id">Id </label>
                        <td><td>
                        <input type="text" name="id" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Nama">Nama </label>
                        <td><td>
                        <input type="text" name="Nama" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="jenis_kelamin">Jenis Kelamin </label>
                        <td><td>
                        <label><input type="radio" name="Jenis_Kelamin" value="Laki-laki"> Laki-laki</label>
                        <label><input type="radio" name="Jenis_Kelamin" value="Perempuan"> Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="alamat">Alamat </label>
                        <td><td>
                        <input type="text" name="alamat" required/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Tambah" name="tambah" />
                    </td>
                </tr>
                
</table>
        </form>
    </fieldset>
</center>
    </body>
</html>
