<?php
error_reporting(0);
include 'koneksi2.php';

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	$query = "INSERT INTO tbregister VALUES ('$username', '$email', '$password')";
	$result = mysqli_query($koneksi2, $query);

	if (!$result) {
		die ("Query gagal dijalankan: ".mysqli_errno($koneksi2).
		" - ".mysqli_error($koneksi2));
	} else {
		echo "<script>alert('Registration Completed');
			window.location.href='dashboard2.php'</script>";
		}
	}

?>