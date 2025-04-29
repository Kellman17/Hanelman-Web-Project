<?php
    include('koneksi.php');

    $packetname = $_POST['packetname'];
    $duration= $_POST['duration'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $query = "INSERT INTO packet (Packet_Name, Duration, Quantity, Price) 
    VALUES ('$packetname', '$duration', '$quantity', '$price')";

    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    else {
            header("location: packet.php");
    }

?>