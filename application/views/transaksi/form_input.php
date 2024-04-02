<html>

<head>
    <title>Input Data Transaksi</title>
</head>

<body>
    <h3>Form Input Data Transaksi</h3>

    <table>
        <!-- mengirimkan aksi form ke controller untuk proses DB-->
        <form action="<?php echo base_url('Transaksi/InsertTransaksi') ?>" method="post">

            <tr>
                <td>Pelanggan</td>
                <td>:</td>
                <td>
                    <select name="pelanggan_id">
                        <option value="">--Pilih Pelanggan--</option>
                        <?php foreach ($nama as $key => $value) { ?>
                            <option value="<?= $value->id ?>"><?= $value->nama ?></option>
                        <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Mobil</td>
                <td>:</td>
                <td>
                    <select name="mobil_id">
                        <option value="">--Pilih Mobil--</option>
                        <?php foreach ($mobil as $key => $value) { ?>
                            <option value="<?= $value->id ?>"><?= $value->varian ?></option>
                        <?php } ?>
                </td>
            </tr>
            <tr>
                <td>Total Hari Rental</td>
                <td>:</td>
                <td><input type="text" name="total_hari_rental" required>Hari</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td><input type="text" name="total_harga" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="SIMPAN"></td>
            </tr>
        </form>
    </table>

</body>

</html>