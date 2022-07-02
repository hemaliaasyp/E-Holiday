<?php
	include ('koneksi2.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galeri</title>

	<link rel="stylesheet" type="text/css" href="galeri.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
	<header>
		<div class="nav">
			<h2 class="logo"><span>E-</span>Holiday</h2>
			<ul>
				<li><a href="index.html">Beranda</a></li>
				<li class="sub-nav">
					<a href="#">Destinasi Wisata</a>
					<div class="sub-nav-konten">
						<a href="airterjun.php">Air Terjun</a>
						<a href="gunung.php">Gunung</a>
						<a href="taman.php">Taman</a>
						<a href="candi.php">Candi</a>
					</div>
				</li>
				<li><a href="vt2.php">Virtual Tour</a></li>
				<li><a href="event.php">Event</a></li>
				<li><a href="#">Galeri</a></li>
				<li><a href="tentang.html">Tentang</a></li>
			</ul>
		</div>
	
		<div class="main">
			<div class="text">
				<h1>Galeri</h1>
			</div>
		</div>
	</header>
	    <div class="container-fluid">
		    <div class="row">
		    	<div class="column">
		    		<?php
				      $no = 0;
				      $result = mysqli_query($koneksi2, "SELECT * FROM tbgaleri ORDER BY id_wisata ASC");
				      while($row = mysqli_fetch_array($result)) {
				      $no++
				    ?>
		        	<img src="image/<?php echo $row['foto'];?>" />
		    		<?php } ?>
		      	</div>
		    </div>
		</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<footer class="bg-light text-center text-lg-start">
	<div class="text-center p-3" style="background-color: #fabd02; font-weight: bold;">
    	© 2021 Copyright: PAGE
	</div>
</footer>
</html>