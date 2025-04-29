<?php
include ('koneksi.php');

$id = $_GET['id_packet'];
$query = "DELETE FROM packet WHERE id_packet = '$id'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
}
else {
        echo "<script>alert('data berhasil dihapus');window.location='packet.php';</script>";
    }

?>