<html>

<head>
    <title>Detail Transaksi</title>
</head>

<body>
    <h3>Transaksi <?php echo $data_pelanggan->nama ?></h3>

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="nama" value="<?php echo $data_pelanggan->nama ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Mobil</td>
            <td>:</td>
            <td>
                <input type="text" name="gender" value="<?php echo $data_mobil->varian ?>" disabled>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $data_transaksi->total_hari_rental ?>" disabled>
            </td>data_transaksi
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><input type=" text" name="no_telpon" value="<?php echo $data_transaksi->total_harga ?>" disabled>
            </td>
        </tr>
    </table>
    <button aria-colspan="2" onclick="document.location.href='<?php echo base_url('Transaksi') ?>'">Kembali</button>

</body>

</html>