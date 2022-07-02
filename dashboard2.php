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

    <script src="https://kit.fontawesome.com/42deadbeef.js"></script>
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
            <div class="header">SELAMAT DATANG ADMIN</div>
            <div class="info" style="text-align: justify;">
                <?php
                $no = 0;
                $result = mysqLi_query($koneksi2, "SELECT * FROM tbdetailwisata ORDER BY id ASC");
                while ($row = mysqli_fetch_array($result)) {
                    $no++
                ?>
                    <div class="wrapper2">
                        <section id="home">
                            <div class="kolom">
                                <h1>
                                    <?php echo $row['nm_wisata']; ?>
                                </h1>
                                <td><?php echo $row['deskripsi']; ?></td>
                                <pre>Lokasi         :   <?php echo $row['lokasi']; ?></pre>
                            </div>
                        </section>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>