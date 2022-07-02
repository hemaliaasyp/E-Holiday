<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_GET['id'])) {
	$nm_wisata = $_GET['id'];

    $query = "DELETE from tbvirtualtour where nm_wisata = '$nm_wisata'";
    $result = mysqli_query($koneksi2, $query);

    if (!$result) {
        die("Data gagal ditambahkan; " . mysqli_errno($koneksi2) . mysqli_error($koneksi2));
    } else {
        echo "<script>alert('Data Berhasil Dihapus');
            window.location.href='datavt.php'</script>";
    }
}

?>