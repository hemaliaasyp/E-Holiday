<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_GET['id'])) 
{
	$id = $_GET['id'];

    $query = "DELETE from tbdetailwisata where id = '$id'";
    $result = mysqli_query($koneksi2, $query);

    if (!$result) {
        die("Data gagal ditambahkan; " . mysqli_errno($koneksi2) . mysqli_error($koneksi2));
    } else {
        echo "<script>alert('Data Berhasil Dihapus');
            window.location.href='datawisata1.php'</script>";
    }
}

?>

