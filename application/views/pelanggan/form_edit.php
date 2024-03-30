<html>

<head>
    <title>Edit Data Pelanggan</title>
</head>

<body>
    <h3>Form Edit Data Pelanggan</h3>

    <table>
        <form action="<?php echo base_url('Pelanggan/EditPelanggan/') . $data_pelanggan->id ?>" method="post">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $data_pelanggan->nama ?>">
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <input type="text" name="gender" value="<?php echo $data_pelanggan->gender ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" value="<?php echo $data_pelanggan->alamat ?>">
                </td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><input type=" text" name="no_telpon" value="<?php echo $data_pelanggan->no_telpon ?>">
                </td>
            </tr>
            <tr>
                <td colspan=" 2"><input type="submit" value="SIMPAN"></td>
            </tr>
        </form>
    </table>

</body>

</html>