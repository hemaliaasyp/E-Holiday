<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_POST['simpan'])) {
    $id_event = $_POST['id_event'];
	$nm_event = $_POST['nm_event'];
	$deskripsi = $_POST['deskripsi'];
	$foto = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];
	$path = "image/" .$foto;

	$query = "INSERT INTO event2 VALUES ('$id_event','$nm_event','$deskripsi','$foto')";
	$result = mysqli_query($koneksi2, $query);

	if (!$result) {
		die ("Query gagal dijalankan: ".mysqli_errno($koneksi2).
		" - ".mysqli_error($koneksi2));
	} else {
			echo "<script>alert('Data Berhasil Ditambah');
			window.location.href='dataevent.php'</script>";
	}
}

?>