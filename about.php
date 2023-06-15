<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit();
}
 ?>   
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<title>About</title>
	<style>
		table.center {
			margin-left: auto; 
  			margin-right: auto;
            background-color: #bedcfa;
            border-radius: 10px;
		}
        .or {
            text-align: center;
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
		<a class="nav-link" href="index.php">Home</a>
		<a class="nav-link active" href="#">About</a>
		<a class="nav-link" href="tambah.php">Tambah Data</a>
		<a class="nav-link" href="logout.php">Logout</a>
		</div>
	</div>
    </nav>

<br>
<h1 style="text-align: center;">About Me</h1><br>
    <table cellpadding="10" cellspacing="0" class="center">
        <tr>
            <td>Nama</td>
            <td>: Najwa Syiba Hansyaf</td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>: 1911212056</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: Ilmu Kesehatan Masyarakat</td>
        </tr>
        <tr>
            <td>Institusi</td>
            <td>: Universitas Andalas</td>
        </tr>
        <tr>
            <td>Divisi</td>
            <td>: Web Programming</td>
        </tr>
    </table>
<br><br>
<div class="or" class="btn btn-link">Open Recruitment 11 Neo Telemetri</div>
</body>
</html>