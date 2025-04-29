<?php
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $radio_100 = $_POST['radio_100'];
                $radio_200 = $_POST['radio_200'];
                $radio_500 = $_POST['radio_500'];

				// die(var_dump($_POST['remember']));
				
                if(!empty($radio_100) || !empty($radio_200) || !empty($radio_500) ){
                    session_start();
                    
                    $_SESSION['$radio_100'] = $radio_100;
                    $_SESSION['$radio_200'] = $radio_200;
                    $_SESSION['$radio_500'] = $radio_500;
                    if(session_start()){
                        header("location: paketA.php");
                    }
                }else{
                    echo "<b>ADA KESALAHAN</b>";
                }
            }
        ?>