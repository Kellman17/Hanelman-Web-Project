<?php
	
	include "../admin_panel/koneksi.php";
	
	if (isset($_POST['submit'])) {
		$username = $_POST ['username'];
		$email = $_POST ['email'];
		$phone = $_POST ['phone'];
		$password1 = $_POST ['password1'];
		$password2 = $_POST ['password2'];

		$cek_user = mysqli_query($koneksi,"SELECT * FROM user where username = '$username'");
		$cek_login = mysqli_num_rows($cek_user);

		if ($cek_login > 0) {
			echo "<script>
				alert('username telah terdaftar');
				window.location = 'registrasi.php';
				</script>";
		}
		else {
			if ($password1 != $password2) {
				echo "<script>
				alert('konfirmasi password tidak sesuai');
				window.location = 'registrasi.php';
				</script>";
			}
			else {
				$password = password_hash($password1, PASSWORD_DEFAULT);
				mysqli_query($koneksi, "INSERT INTO user VALUES	(NULL, '$username', '$password', '$email', '$phone')");
				echo "<script>
				alert('Berhasil Daftar');
				window.location = 'index.php';
				</script>";
			}
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/register.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Register Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form aaction="" method="POST">
					<input class="text" type="text" name="username" placeholder="username" required="yes">
					<input class="text email" type="email" name="email" placeholder="email" required="yes">
					<input class="text phone" type="text" name="phone" placeholder="phone" required="yes">
					<input class="text" type="password" name="password1" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="password2" placeholder="Confirm Password" required="">
					<input type="submit" value="SIGNUP" name="submit">
				</form>
				<p>Already have an account? <a href="index.php"> Login</a></p>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>