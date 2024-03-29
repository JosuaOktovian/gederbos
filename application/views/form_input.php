<html>

<head>
    <title>Input Data</title>
</head>

<body>
    <h3>Form Input Data</h3>

    <table>
        <!-- mengirimkan aksi form ke controller untuk proses DB-->
        <form action="<?php echo base_url('Welcome/InsertMobil') ?>" method="post">

            <tr>
                <td>Merk</td>
                <td>:</td>
                <td><input type="text" name="merk" required></td>
            </tr>
            <tr>
                <td>Varian</td>
                <td>:</td>
                <td><input type="text" name="varian" required></td>
            </tr>
            <tr>
                <td>Jenis Bahan Bakar</td>
                <td>:</td>
                <td><input type="text" name="jenis_bahan_bakar" required></td>
            </tr>
            <tr>
                <td>Jenis Kendaraan</td>
                <td>:</td>
                <td><input type="text" name="jenis_kendaraan" required></td>
            </tr>
            <tr>
                <td>Transmisi</td>
                <td>:</td>
                <td><input type="text" name="transmisi" required></td>
            </tr>
            <tr>
                <td>Kapasitas Mesin</td>
                <td>:</td>
                <td><input type="text" name="kapasitas_mesin" required></td>
                <td>cc</td>
            </tr>
            <tr>
                <td>Tenaga</td>
                <td>:</td>
                <td><input type="text" name="tenaga" required></td>
                <td>hp</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN"></td>
            </tr>
        </form>
    </table>

</body>

</html>