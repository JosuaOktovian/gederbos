<html>

<head>
    <title>Edit Data</title>
</head>

<body>
    <h3>Form Edit Data</h3>

    <table>
        <tr>
            <td>Merk</td>
            <td>:</td>
            <td>
                <input type="text" name="merk" value="<?php echo $data_mobil->merk ?>">
            </td>
        </tr>
        <tr>
            <td>Varian</td>
            <td>:</td>
            <td>
                <input type="text" value="<?php echo $data_mobil->varian ?>" disabled>
                <input type="text" name="varian">
            </td>
        </tr>
        <tr>
            <td>Jenis Bahan Bakar</td>
            <td>:</td>
            <td><input type="text" name="jenis_bahan_bakar">
            </td>
        </tr>
        <tr>
            <td>Jenis Kendaraan</td>
            <td>:</td>
            <td><input type="text" name="jenis_kendaraan">
            </td>
        </tr>
        <tr>
            <td>Transmisi</td>
            <td>:</td>
            <td><input type="text"="transmisi">
            </td>
        </tr>
        <tr>
            <td>Kapasitas Mesin</td>
            <td>:</td>
            <td><input type="text"="kapasitas_mesin">
            </td>
            <td>cc</td>
        </tr>
        <tr>
            <td>Tenaga</td>
            <td>:</td>
            <td><input type="text" name="tenaga">
            </td>
            <td>hp</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="SIMPAN"></td>
        </tr>
    </table>

</body>

</html>