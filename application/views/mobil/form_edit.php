<html>

<head>
    <title>Edit Data Mobil</title>
</head>

<body>
    <h3>Form Edit Data Mobil</h3>

    <table>
        <form action="<?php echo base_url('Mobil/EditMobil/') . $data_mobil->id ?>" method="post">
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
                    <input type="text" name="varian" value="<?php echo $data_mobil->varian ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Bahan Bakar</td>
                <td>:</td>
                <td><input type="text" name="jenis_bahan_bakar" value="<?php echo $data_mobil->jenis_bahan_bakar ?>">
                </td>
            </tr>
            <tr>
                <td>Jenis Kendaraan</td>
                <td>:</td>
                <td><input type=" text" name="jenis_kendaraan" value="<?php echo $data_mobil->jenis_kendaraan ?>">
                </td>
            </tr>
            <tr>
                <td>Transmisi</td>
                <td>:</td>
                <td><input type=" text" name="transmisi" value="<?php echo $data_mobil->transmisi ?>">
                </td>
            </tr>
            <tr>
                <td>Kapasitas Mesin</td>
                <td>:</td>
                <td><input type=" text" name="kapasitas_mesin" value="<?php echo $data_mobil->kapasitas_mesin ?>">
                </td>
                <td>cc</td>
            </tr>
            <tr>
                <td>Tenaga</td>
                <td>:</td>
                <td><input type=" text" name="tenaga" value="<?php echo $data_mobil->tenaga ?>">
                </td>
                <td>hp</td>
            </tr>
            <tr>
                <td colspan=" 2"><input type="submit" value="SIMPAN"></td>
            </tr>
        </form>
    </table>

</body>

</html>