<?php
include "../admin_panel/koneksi.php";

$id = $_GET['id_keranjang'];
$sql = "DELETE FROM keranjang WHERE id_keranjang = $id";
$result = mysqli_query($koneksi, $sql);
if($result){
    header("Location: shoping-cart1.php");
}else{
     echo "Failed: " .mysqli_error($koneksi);
}

?>
