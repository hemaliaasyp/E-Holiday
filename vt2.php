<?php

    include 'koneksi2.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Virtual Tour</title>
	<link rel="stylesheet" type="text/css" href="vt3.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

	<title></title>
</head>
<body>
	<section class="showcase">
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
            <li><a href="#">Virtual Tour</a></li>
				<li><a href="event.php">Event</a></li>
				<li><a href="galeri.php">Galeri</a></li>
				<li><a href="tentang.html">Tentang</a></li>
         </ul>
      	</div>   

    	</header>
    	<video src="jadi.mp4" muted loop autoplay></video>
    		<div class="overlay"></div>
    		<div class="main">
    			<div class="text">
      			<h1>Virtual Tour </h1> <br>
      				<div class="active">
               		<a href="#home" class="btnone">Lihat Selengkapnya</a>
            	</div>
    		</div>
    	</div>
    	

  	</section>
  	<?php
            $no=0;
            $result = mysqLi_query($koneksi2,"SELECT * FROM tbvirtualtour ORDER BY nm_wisata ASC");
            while($row = mysqli_fetch_array($result)){
                $no++
    	?>
   
  	
    <section id="home">
    	<header style="margin-top: 780px;" class="header2">
        	<div class="kolom">
            <h1><?php echo $row['nm_wisata'];?></h1><br><br>
            <center><td><?php echo $row['desk'];?></td></center>
            <center><td><?php echo $row['vt'];?></td></center>  
         	</div>
     	</header>
    </section>


    <?php } ?>  
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
<footer class="bg-light text-center text-lg-start">
	<div class="text-center p-3" style="background-color: #fabd02; font-weight: bold;">
    	© 2021 Copyright: PAGE
	</div>
</footer>
</html>