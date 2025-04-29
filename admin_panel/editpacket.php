<?php
    include('koneksi.php');

        $id = $_GET['id_packet'];
        $query = "SELECT * FROM packet WHERE id_packet = '$id'";
        $result = mysqli_query($koneksi,$query);
        if(!$result){
            die('Error: '. mysqli_errno($koneksi)." - ". mysqli_error($koneksi));
        }
        $data  = mysqli_fetch_assoc($result);
        if (!count($data)) {
            echo "<script>alert('data tidak ditemukan');window.location='packet.php';</script>";
        }

        if(isset($_POST['submit'])){
            $packetname = $_POST['packetname'];
            $duration= $_POST['duration'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];

            $sql = "UPDATE packet set Packet_Name='$packetname', Duration='$duration', Quantity='$quantity', 
            Price='$price' WHERE id_packet=$id";
            $result = mysqli_query($koneksi,$sql);
            if($result){
                header("Location: packet.php");
            }else {
                echo "gagal";
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
    <center><h1>EDIT PACKET <?php echo $data['Packet_Name']; ?></h1></center>
        <div>
            <label>Packet Name :</label>
            <input type="text" name="packetname" required="" autofocus="" required="" value="<?php echo $data['Packet_Name']; ?>" />
        </div>
        <div>
            <label>Duration(days) :</label>
            <input type="text" name="duration" required="" autofocus="" required="" value="<?php echo $data['Duration']; ?>" />
        </div>
        <div>
            <label>Quantity :</label>
            <input type="text" name="quantity" required="" autofocus="" required="" value="<?php echo $data['Quantity']; ?>" />
        </div>
        <div>
            <label>Price(Rp) :</label>
            <input type="text" name="price" required="" autofocus="" required="" value="<?php echo $data['Price']; ?>" />
        </div>
       <div>
        <center><button type="submit" name="submit">SAVE CHANGES</button></center>
        
       </div>
    </section>
    </form>
</body>
</html>