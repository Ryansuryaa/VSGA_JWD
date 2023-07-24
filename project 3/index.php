<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jenis</th>
            <th>Jumlah</th>
        </tr>
        <?php
        $query = "select * from barang";
        $list = mysqli_query($conn, $query);

        if (!$list) {
            die ("Gagal terhubung ke database ".mysqli_errno($conn) . " " .mysqli_error($conn));
        }

        while ($a = mysqli_fetch_assoc($list)) {
        ?>
        <tr>
            <td><?php echo htmlentities($a['no']); ?></td>
            <td><?php echo htmlentities($a['nama_barang']); ?></td>
            <td><?php echo htmlentities($a['jenis']); ?></td>
            <td><?php echo htmlentities($a['jumlah']); ?></td>
        </tr>
        <?php }?>
    </table>
    <br>
    <a href="tambah.html">Tambah Data</a>
</body>
</html>