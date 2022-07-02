<?php
    include 'koneksi2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dashboard</title>
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
        <div class="sidebar">
            <h2>E-Holiday</h2>
            <ul>
                <li><a href="dashboard2.php"><i class="fas fa-home"></i>Dashboard</a></li>
                <li><a href="admin.php"><i class="fas fa-user"></i>Data Admin</a></li>
                <li><a href="datawisata1.php"><i class="fas fa-plane"></i>Data Wisata</a></li>
                <li><a href="datavt.php"><i class="fas fa-plane-departure"></i>Data Virtual Tour</a></li>
                <li><a href="dataevent.php"><i class="fas fa-calendar-alt"></i>Data Event</a></li>
                <li><a href="foto.php"><i class="fas fa-camera"></i>Upload Foto</a></li>
                <li><a href="index.html"><i class="fas fa-tree"></i>Web Front</a></li>
                <li><a href="login.php"><i class="fas fa-power-off"></i>Logout</a></li>
            </ul> 
        </div>
    <div class="main_content">  
        <div class="info">
        <h2><i class="fas fa-camera-retro"></i> Foto</h2>          
        <form action="prosesTambah.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" name="id">
            </div>

            <div class="form-group">
                <label>ID WISATA</label>
                <input type="text" class="form-control" name="id_wisata">
            </div>

            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" id="foto" name="foto" required>
            </div>

            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
        </form>
        </div>
    </div>
</body>
</html>