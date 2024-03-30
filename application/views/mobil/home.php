<html>

<head>
    <title>GEDER BOS MOBIL</title>
</head>

<body>
    <h1>DATA MOBIL</h1>

    <table>
        <tr>
            <td><b><a href="<?php echo base_url('Home') ?>">Home</a></b></td>
            <td><b><a href="<?php echo base_url('Mobil') ?>">Data Mobil</a></b></td>
            <td><b><a href="<?php echo base_url('Pelanggan') ?>">Data Pelanggan</a></b></td>
            <td><b><a href="<?php echo base_url('Transaksi') ?>">Data Transaksi</a></b></td>
        </tr>
    </table>

    <button onclick="document.location.href='<?php echo base_url('Mobil/formInput') ?>'">Tambah Data Mobil</button>

    <table>
        <tr>
            <td><b>No</b></td>
            <td><b>Merk</b></td>
            <td><b>Varian</b></td>
            <td><b>Jenis Kendaraan</b></td>
            <td><b>Aksi</b></td>
        </tr>

        <?php
        //Looping menampilkan data dari database
        //menampung nomor urut data yang ditampilkan
        $count = 0;
        //panggil key array -> deklarasi menjadi variable row
        foreach ($data_mobil as $row) {
            $count = $count + 1;

        ?>

            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row->merk ?></td>
                <td><?php echo $row->varian ?></td>
                <td><?php echo $row->jenis_kendaraan ?></td>
                <td>
                    <a href="<?php echo base_url('Mobil/formDetail/') . $row->id ?>">View</a>
                    <a href="<?php echo base_url('Mobil/formEdit/') . $row->id ?>">Edit</a>
                    <a href="<?php echo base_url('Mobil/DeleteMobil/') . $row->id ?>">Delete</a>
                </td>
            </tr>

        <?php } ?>
    </table>

</body>

</html>