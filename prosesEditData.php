<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_POST['edit'])) {
	$id = $_POST['id'];
    $nm_wisata = $_POST['nm_wisata'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $map = $_POST['map'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/" . $foto;

    if (empty($foto)) {
        $query = "UPDATE tbdetailwisata SET nm_wisata = '$nm_wisata', deskripsi = '$deskripsi', kategori = '$kategori', lokasi = '$lokasi', map = '$map' WHERE id = '$id'";
    } else {
        $file = mysqli_query($koneksi2, "SELECT foto FROM tbdetailwisata WHERE id = '$id'");
        $hasil = mysqli_fetch_array($file);
        $foto_lama = $hasil['foto'];
        unlink("image/" . $foto_lama);

        if (move_uploaded_file($tmp, $path)) {
            $query = "UPDATE tbdetailwisata SET nm_wisata = '$nm_wisata', deskripsi = '$deskripsi', kategori = '$kategori', lokasi = '$lokasi', map = '$map', foto = '$foto' WHERE id = '$id'";
        }
    }

    $result = mysqli_query($koneksi2, $query);

    if (!$result) {
        die("Data gagal diubah." . mysqli_errno($koneksi2) . mysqli_error($koneksi2));
    } else {
        echo "<script>alert('Data Berhasil Diubah');
            window.location.href='datawisata1.php'</script>";
    }
}

?>