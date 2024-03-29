<html>

<head>
    <title>Detail Mobil</title>
</head>

<body>
    <h3>Mobil <?php echo $data_mobil->varian ?></h3>

    <table>
        <tr>
            <td>Merk</td>
            <td>:</td>
            <td>
                <input type="text" name="merk" value="<?php echo $data_mobil->merk ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Varian</td>
            <td>:</td>
            <td>
                <input type="text" name="varian" value="<?php echo $data_mobil->varian ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Jenis Bahan Bakar</td>
            <td>:</td>
            <td><input type="text" name="jenis_bahan_bakar" value="<?php echo $data_mobil->jenis_bahan_bakar ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Jenis Kendaraan</td>
            <td>:</td>
            <td><input type=" text" name="jenis_kendaraan" value="<?php echo $data_mobil->jenis_kendaraan ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Transmisi</td>
            <td>:</td>
            <td><input type=" text" name="transmisi" value="<?php echo $data_mobil->transmisi ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Kapasitas Mesin</td>
            <td>:</td>
            <td><input type=" text" name="kapasitas_mesin" value="<?php echo $data_mobil->kapasitas_mesin ?>" disabled>
            </td>
            <td>cc</td>
        </tr>
        <tr>
            <td>Tenaga</td>
            <td>:</td>
            <td><input type=" text" name="tenaga" value="<?php echo $data_mobil->tenaga ?>" disabled>
            </td>
            <td>hp</td>
        </tr>
    </table>
    <button aria-colspan="2" onclick="document.location.href='<?php echo base_url() ?>'">Kembali</button>

</body>

</html>