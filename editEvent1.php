<?php
error_reporting(0);
include 'koneksi2.php';
if (isset($_GET["id"])) {
    $id_event = ($_GET["id"]);

    $result = mysqli_query($koneksi2, "SELECT * FROM event2 WHERE id_event = '$id_event'");

    while($row = mysqli_fetch_array($result)) {
        $id_event = $row['id_event'];
        $nm_event = $row['nm_wisata'];
        $deskripsi = $row['deskripsi'];
        $foto = $row['foto'];
    }

} else {
    header("location:dataevent.php");
        }

?>
<!DOCTYPE html>
<head>
    <title>Edit Data Event</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
</head>
<body>
    <div class="conteiner" style="margin-left: 300px; margin-right: 300px;">
        <h2 class="alert alert-warning text-center mt-5">DATA EVENT</h2>

        <form action="proseseditevent.php" method="post" enctype="multipart/form-data" name= "form1" id="form1">
            <div class="form-group">
                <label>ID</label>
                <input type="text" class="form-control" name="id_event" value="<?php echo $id_event; ?>" required/>
            </div>
            
            <div class="form-group">
                <label>Nama Event</label>
                <input type="text" class="form-control" name="nm_event" value="<?php echo $nm_event; ?>" required/>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <input type="textarea" class="form-control" name="deskripsi" value="<?php echo $deskripsi; ?>" required/>
            </div>
            
            <div class="form-group">
                <label>Foto</label>
                <input class="form-control" type="file" id="foto" name="foto" value="<?php echo $foto; ?>" required/>
            </div>
                
                <button type="submit" class="btn btn-success" name="edit" value="Submit" style="margin-top: 20px;">EDIT</button>
                
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>