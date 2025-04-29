<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $product = $_POST['packetname'];
        $quantity = $_POST['quantity'];
        $duration = $_POST['duration'];
        $price = $_POST['price'];

        $insert = mysqli_query ($koneksi, "INSERT INTO packet (Packet_Name, Duration, Quantity, Price)
        VALUES ('$product', '$duration', '$quantity', '$price')");
    
        if($insert) {
            echo "<script>alert('tambah berhasil')</script>";
            header("Location: packet.php");
        }else {
            echo "failed : " . mysqli_error($koneksi);
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>ADD PACKET</title>
    <style type="text/css">
        * {
            fontfamily: "Helvetica Neue",Helvetica,Arial;
        }
        h1 {
            text-transform : uppercase;
            color: #273746 ;
        }
        label {
            margin-top : 10px;	
            float : left;
            text-align : left;
            width : 100%;
        }
        input {
            padding : 6px;
            width : 100%;
            box-sizing : border-box;
            background-color :  #E5E7E9;
            border : 2px solid #cccccc;
            outline-color : salmon;
        }
        .base{
            width : 400px;
            padding : 20px;
            margin-left: auto;
            margin-right: auto;
            background-color :#5DADE2 ;
        }
        button{
            margin-top: 10px;
            text-align: center;
            padding : 10px;
            color : white ;
            background-color : #273746;
        }


    </style>
</head>
<body>
    
    <form method="POST" action="" enctype="multipart/form-data">
    <section class="base">
    <center><h1>ADD PACKET</h1></center>
        <div>
            <label>Packet Name :</label>
            <input type="text" name="packetname" required="yes">
        </div>
        <div>
            <label>Duration(week) :</label>
            <input type="text" name="duration" required="yes">
        </div>
        <div>
            <label>Quantity :</label>
            <input type="text" name="quantity" required="yes">
        </div>
        <div>
            <label>Price(Rp) :</label>
            <input type="text" name="price" required="yes">
        </div>
       <div>
        <center><button type="submit" name="submit">SUBMIT</button></center>
        
       </div>
    </section>
    </form>
</body>
</html>