<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$id_wisata = $_POST['id_wisata'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$path = "image/" .$foto;

	if (move_uploaded_file($tmp, $path)){
		$query = "INSERT INTO tbgaleri VALUES ('$id','$id_wisata','$foto')";
		$result = mysqli_query($koneksi2, $query);

		if (!$result) {
			die ("Query gagal dijalankan: ".mysqli_errno($koneksi2).
			" - ".mysqli_error($koneksi2));
		}
		else
		{
			echo "<script>alert('Data Berhasil Ditambah');
			window.location.href='foto.php'</script>";
		}
	}
}

?>