<?php
session_start();  
include "../admin_panel/koneksi.php";

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "SELECT * FROM user WHERE 'username' = '$username' AND 'password' = '$password'";
  $result = mysqli_query($koneksi, $sql);

  $_SESSION['username'] = $_POST['username'];
  if(($result)){
    if($username=="admin"){
      header("Location: ../admin_panel/dashboard.php");
    }else{
      header("Location: ../user_panel/index.php");
    }
  }
}
?>

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Log-in</title>

  <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action = "" method="POST" >
    <input type="text" name="username" placeholder="Username" value="">
    <input type="password" name="password" placeholder="Password" value=""> 
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="registrasi.php">Register Account </a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

  <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

</body>

</html>