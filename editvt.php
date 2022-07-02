<?php
error_reporting(0);
include 'koneksi2.php';
if (isset($_GET["nm_wisata"])) {
    $nm_wisata = ($_GET["nm_wisata"]);

    $result = mysqli_query($koneksi2, "SELECT * FROM tbvirtualtour WHERE nm_wisata = '$nm_wisata'");

    while($row = mysqli_fetch_array($result)) {
        $nm_wisata = $row['nm_wisata'];
        $video = $row['video'];
        $vt = $row['desk'];
        $vt = $row['vt'];
    }

} else {
    header("location:datavt.php");
        }

?>
<!DOCTYPE html>
<head>
    <title>Edit Data Virtual Tour</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="conteiner" style="margin-left: 300px; margin-right: 300px;">
        <h2 class="alert alert-warning text-center mt-5">DATA VIRTUAL TOUR</h2>

        <form action="prosesEditVT.php" method="post" enctype="multipart/form-data" name= "form1" id="form1">      
            <div class="form-group">
                <label>Nama Tempat Wisata</label>
                <input type="text" class="form-control" name="nm_wisata" value="<?php echo $nm_wisata; ?>" required/>
            </div>
            
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" class="form-control" name="desk" value="<?php echo $desk; ?>" >
            </div>

            
            <div class="form-group">
                <label>Virtual Tour</label>
                <input class="form-control" type="text" id="vt" name="vt" value="<?php echo $vt; ?>" >
            </div>
                
                <button type="submit" class="btn btn-success" name="edit" value="Submit" style="margin-top: 20px;">EDIT</button>
                
        </form>
    </div>


</body>
</html>