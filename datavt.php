<?php
include 'koneksi2.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Virtual Tour</title>
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
        <div class="header">SELAMAT DATANG ADMIN</div>  
        <div class="info">
            <h1>Data Virtual Tour</h1>
            <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-warning">
                        <th>No</th>
                        <th>Nama Wisata</th>
                        <th>Deskripsi</th>
                        <th>Virtual Tour</th>
                        <th><a href="inputVT.php" type="button" class="btn btn-warning" style="margin-left: 25px;"><i class="fa fa-plus-circle"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        $result = mysqli_query($koneksi2, "SELECT * FROM tbvirtualtour ORDER BY nm_wisata ASC");
                        while($row = mysqli_fetch_array($result)) {
                            $no++
                        ?>
                        <tr>
                        <td><?php echo $no;?></td>
                        <td><?php echo $row['nm_wisata'];?></td>
                        <td><?php echo $row['desk'];?>
                        <td><?php echo $row['vt'];?></td>
                        <td>
                            <a href="editvt.php?id=<?php echo $row['nm_wisata'];?>" class="btn btn-primary" ><i class='fa fa-pen-square'></i></a>
                            <a href="hapusvt.php?id=<?php echo $row['nm_wisata'];?>" type="button" class="btn btn-danger"><i class='fa fa-trash'></i></a>
                        </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>