<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit();
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari sudah ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
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

	
	<title>Halaman Admin</title>
	<style>
		table, th, td {
  		border: 1px solid black;
		}
		table.center {
			margin-left: auto; 
  			margin-right: auto;
		}
		.keyword {
			outline: none;
			margin-left: 430px;
		}
	</style>

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>

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
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="about.php">About</a>
		<a class="nav-link" href="tambah.php">Tambah Data</a>
		<a class="nav-link" href="logout.php">Logout</a>
		<form action="" method="post">
			<input type="text" name="keyword" size="40" class="keyword" autofocus autocomplete="off" placeholder="Masukkan keyword pencarian" id="keyword">
			<button type="submit" name="cari" id="tombol-cari">Cari!</button>
		</form>
		</div>
	</div>
	</nav>

	<!-- warna tombol -->
	<!-- <button type="button" class="btn btn-primary">Primary</button>
	<button type="button" class="btn btn-secondary">Secondary</button>
	<button type="button" class="btn btn-success">Success</button>
	<button type="button" class="btn btn-danger">Danger</button>
	<button type="button" class="btn btn-warning">Warning</button>
	<button type="button" class="btn btn-info">Info</button>
	<button type="button" class="btn btn-light">Light</button>
	<button type="button" class="btn btn-dark">Dark</button>
	<button type="button" class="btn btn-link">Link</button> -->

<br>
<h1 style="text-align: center;">Daftar Mahasiswa</h1><br>
<div id="container">
<table cellpadding="10" cellspacing="0" class="center">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nama</th>
		<th>NIM</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i=1; ?>
	<?php foreach ($mahasiswa as $row) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-primary">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');" class="btn btn-danger">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach ?>
</table>
</div>


</body>
</html>