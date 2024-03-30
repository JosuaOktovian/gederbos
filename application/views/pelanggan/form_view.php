<html>

<head>
    <title>Detail Pelanggan</title>
</head>

<body>
    <h3>Pelanggan <?php echo $data_pelanggan->nama ?></h3>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="nama" value="<?php echo $data_pelanggan->nama ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>:</td>
            <td>
                <input type="text" name="gender" value="<?php echo $data_pelanggan->gender ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $data_pelanggan->alamat ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><input type=" text" name="no_telpon" value="<?php echo $data_pelanggan->no_telpon ?>" disabled>
            </td>
        </tr>
    </table>
    <button aria-colspan="2" onclick="document.location.href='<?php echo base_url('Pelanggan') ?>'">Kembali</button>

</body>

</html>