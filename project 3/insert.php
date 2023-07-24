<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nama_barang = $_POST['nama_barang'];
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO barang VALUES ('$no', '$nama_barang ', '$jenis', '$jumlah')";
    $hasil = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($hasil) {
        echo '<script>window.location="index.php"</script>';
    } else {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}
?>