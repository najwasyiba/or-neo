<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit();
}

require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

	// cek apakah data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index.php';
			</script>
		";
	}

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

	<title>Tambah data mahasiswa</title>
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
			<a class="nav-link active" href="#">Tambah Data</a>
			<a class="nav-link" href="logout.php">Logout</a>
			</div>
		</div>
	</nav>

<br>
<h1 style="text-align: center;">Tambah Data Mahasiswa</h1><br>
	<table class="center" cellpadding="10">
		<form action="" method="post" enctype="multipart/form-data">
			<tr>
				<td><label for="nama">Nama</label></td>
				<td><input type="text" name="nama" id="nama" required size="30"></td>
			</tr>
			<tr>
				<td><label for="nim">NIM</label></td>
				<td><input type="text" name="nim" id="nim" required size="30"></td>
			</tr>
			<tr>
				<td><label for="email">Email</label></td>
				<td><input type="text" name="email" id="email" required size="30"></td>
			</tr>
			<tr>
				<td><label for="jurusan">Jurusan</label></td>
				<td><input type="text" name="jurusan" id="jurusan" required size="30"></td>
			</tr>
			<tr>
				<td><label for="gambar">Gambar</label></td>
				<td><input type="file" name="gambar" id="gambar"></td>
			</tr>
			<tr>
				<td colspan="2" style="text-align: center;"><br>
				<button type="submit" name="submit" class="btn btn-success">Tambah data!</button></td>
			</tr>
		</form>
	</table>
</body>
</html>