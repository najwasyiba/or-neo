<?php 
session_start();
require 'functions.php';

// cek cookie 
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}


if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}


if (isset($_POST["login"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if (mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if (password_verify($password, $row["password"])) {
			// set session 
			$_SESSION["login"] = true;

			// cek remember me
			if (isset($_POST['remember'])) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}


 ?>
<!DOCTYPE html>
<html>
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<title>Halaman Login</title>
	<style>
		table.center {
			margin-left: auto; 
  			margin-right: auto;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<!-- bootstrap -->
	<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			<a class="nav-link" href="index.php">Home</a>
			<a class="nav-link" href="about.php">About</a>
			<a class="nav-link" href="tambah.php">Tambah Data</a>
			<a class="nav-link active" href="#">Login</a>
			</div>
		</div>
	</nav>

	
<br>
<h1 style="text-align: center;">Login</h1><br>
	<table class="center" cellpadding="5">
		<form action="" method="post"> 
			<tr>
				<td><label for="username">username</label></td>
				<td><input type="text" name="username" id="username" required></td>
			</tr>
			<tr>
				<td><label for="password">password</label></td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;"><input type="checkbox" name="remember" id="remember">
				<label for="remember">remember me</label></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<?php if (isset($error)) : ?>
						<p style="color: red; font-style: italic;">username / password salah!</p>
					<?php endif; ?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<button type="submit" name="login" class="btn btn-success">Login</button>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<br><div>Belum terdaftar?</div>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;">
					<a href="registrasi.php">Registrasi disini!</a>
				</td>
			</tr>
		</form>
	</table>
</body>
</html>