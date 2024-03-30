<html>

<head>
    <title>Input Data Pelanggan</title>
</head>

<body>
    <h3>Form Input Data Pelanggan</h3>

    <table>
        <!-- mengirimkan aksi form ke controller untuk proses DB-->
        <form action="<?php echo base_url('Pelanggan/InsertPelanggan') ?>" method="post">

            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><input type="text" name="gender" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" required></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input type="text" name="no_telpon" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN"></td>
            </tr>
        </form>
    </table>

</body>

</html>