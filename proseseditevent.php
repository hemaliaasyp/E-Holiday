<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_POST['edit'])) {
	$id_event = $_POST['id_event'];
    $nm_event = $_POST['nm_event'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];

    if (empty($foto)) {
         $query = "UPDATE event2 SET nm_event = '$nm_event', deskripsi = '$deskripsi' WHERE id_event = '$id_event'";
    } else {
        $file = mysqli_query($koneksi2, "SELECT foto FROM event2 WHERE id_event = '$id_event'");
        $hasil = mysqli_fetch_array($file);
        $foto_lama = $hasil['foto'];
        unlink("image/" . $foto_lama);

        if (move_uploaded_file($tmp, $path)) {
            $query = "UPDATE event2 SET nm_event = '$nm_event', deskripsi = '$deskripsi', foto = '$foto' WHERE id_event = '$id_event'";
        }
    }
   
    $result = mysqli_query($koneksi2, $query);

    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi2) . mysqli_error($koneksi2));
    } else {
        echo "<script>alert('Data Berhasil Diubah');
            window.location.href='dataevent.php'</script>";
    }
}

?>