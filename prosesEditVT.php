<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_POST['edit'])) {
    $nm_wisata = $_POST['nm_wisata'];
    $video = $_FILES['video']['name'];
    $tmp = $_FILES['video']['tmp_name'];
    $path = "video/" . $video;
    $vt = $_POST['vt'];

    if (empty($foto)) {
        $query = "UPDATE tbvirtualtour SET video = '$video', vt = '$vt' WHERE nm_wisata = '$nm_wisata'";
    } else {
        $file = mysqli_query($koneksi2, "SELECT video FROM tbvirtualtour WHERE nm_wisata = '$nm_wisata'");
        $hasil = mysqli_fetch_array($file);
        $video_lama = $hasil['video'];
        unlink("video/" . $video_lama);

        if (move_uploaded_file($tmp, $path)) {
            $query = "UPDATE tbvirtualtour SET video = '$video', vt = '$vt' WHERE nm_wisata = '$nm_wisata'";
        }
    }

    $result = mysqli_query($koneksi2, $query);

    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi2) . mysqli_error($koneksi2));
    } else {
        echo "<script>alert('Data Berhasil Diubah');
            window.location.href='datavt.php'</script>";
    }
}

?>