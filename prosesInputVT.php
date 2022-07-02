<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_POST['simpan'])) {
	$nm_wisata = $_POST['nm_wisata'];
	$desk = $_POST['desk'];
	$vt = $_POST['vt'];

		$query = "INSERT INTO tbvirtualtour VALUES ('$nm_wisata','$desk','$vt')";
		$result = mysqli_query($koneksi2, $query);

		if (!$result) {
			die ("Query gagal dijalankan: ".mysqli_errno($koneksi2).
			" - ".mysqli_error($koneksi2));
		}
		else
		{
			echo "<script>alert('Data Berhasil Ditambah');
			window.location.href='datavt.php'</script>";
		}
	
}

?>
