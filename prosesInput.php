<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$nm_wisata = $_POST['nm_wisata'];
	$deskripsi = $_POST['deskripsi'];
	$kategori = $_POST['kategori'];
	$lokasi = $_POST['lokasi'];
	$map = $_POST['map'];

	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$path = "image/" .$foto;

	if (move_uploaded_file($tmp, $path)){
		$query = "INSERT INTO tbdetailwisata VALUES ('$id','$nm_wisata','$deskripsi','$kategori','$lokasi','$map','$foto')";
		$result = mysqli_query($koneksi2, $query);

		if (!$result) {
			die ("Query gagal dijalankan: ".mysqli_errno($koneksi2).
			" - ".mysqli_error($koneksi2));
		}
		else
		{
			echo "<script>alert('Data Berhasil Ditambah');
			window.location.href='datawisata1.php'</script>";
		}
	}
}

?>