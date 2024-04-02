<html>

<head>
    <title>GEDER BOS MOBIL</title>
</head>

<body>
    <h1>DATA Transaksi</h1>

    <table>
        <tr>
            <td><b><a href="<?php echo base_url('Home') ?>">Home</a></b></td>
            <td><b><a href="<?php echo base_url('Mobil') ?>">Data Mobil</a></b></td>
            <td><b><a href="<?php echo base_url('Pelanggan') ?>">Data Pelanggan</a></b></td>
            <td><b><a href="<?php echo base_url('Transaksi') ?>">Data Transaksi</a></b></td>
        </tr>
    </table>

    <button onclick="document.location.href='<?php echo base_url('Transaksi/formInput') ?>'">Tambah Data Transaksi</button>

    <table>
        <tr>
            <td><b>No</b></td>
            <td><b>Nama Pelanggan</b></td>
            <td><b>Mobil</b></td>
            <td><b>Aksi</b></td>
        </tr>

        <?php
        //Looping menampilkan data dari database
        //menampung nomor urut data yang ditampilkan
        $count = 0;
        //panggil key array -> deklarasi menjadi variable row
        foreach ($data_transaksi as $row) {
            $count = $count + 1;

        ?>

            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row->nama ?></td>
                <td><?php echo $row->varian ?></td>
                <td>
                    <a href="<?php echo base_url('Transaksi/formDetail/') . $row->id ?>">View</a>
                    <a href="<?php echo base_url('Pelanggan/formEdit/') . $row->id ?>">Edit</a>
                    <a href="<?php echo base_url('Pelanggan/DeletePelanggan/') . $row->id ?>">Delete</a>
                </td>
            </tr>

        <?php } ?>
    </table>

</body>

</html>