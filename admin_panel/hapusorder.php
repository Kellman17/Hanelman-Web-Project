<?php
include ('koneksi.php');

$id = $_GET['id_pesanan'];
$query = "DELETE FROM pesanan WHERE id_pesanan = '$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else {
        echo "<script>alert('data berhasil dihapus');window.location='order.php';</script>";
    }

?>