<?php 
require 'functions.php';

if ( isset($_POST["register"])) {

    if (registrasi($_POST)>0) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
              </script>
        ";
    } else {
        echo mysqli_error($conn);
    }
}

 ?>
<!DOCTYPE html>
<head>
    
    <!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Halaman Registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
		table.center {
			margin-left: auto; 
  			margin-right: auto;
		}
        label {
            display: block;
        }
    </style>
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
			<a class="nav-link active" href="#">Registrasi</a>
			</div>
		</div>
	</nav>

<br>
<h1 style="text-align: center;">Registrasi</h1><br>
    <table class="center" cellpadding="5">
        <form action="" method="post">
            <tr>
                <td><label for="username">username : </label>
                <input type="text" name="username" id="username" required></td>
            </tr>
            <tr>
                <td><label for="password">password : </label>
                <input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td><label for="password2">konfirmasi password : </label>
                <input type="password" name="password2" id="password2" required></td>
            </tr>
            <tr>
                <td style="text-align: center;"><button type="submit" name="register" class="btn btn-success">Register!</button></td>
            </tr>
            <tr>
    			<td colspan="2" style="text-align: center;">
                    <br><div>Sudah punya akun?</div>
                </td>
		    </tr>
		    <tr>
			    <td colspan="2" style="text-align: center;">
                    <a href="login.php">Login disini!</a>
		    	</td>
		    </tr>
        </form>
    </table>
</body>
</html>