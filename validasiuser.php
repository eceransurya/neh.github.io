<?php
//mengaktifkan session
session_start();
if (isset($_SESSION['login'])) {
	//session login ditemukan
	if ($_SESSION['login'] == false) {
		//kembali ke login
		header('Location:../login.php?message=0');
	}
} else {
	//jika tidak ditemukan maka lempar kembali ke halaman login
	header('Location:../login.php?message=0');
}

//sisipkan file koneksi.php
include_once('kelas/koneksi.php');

//menangkap kiriman variabel user dan pass dari halaman login.php
$email = $_POST['user'];
$password = $_POST['pass'];

//baca tabel user khusus user aktif saja yaitu deleted_at = null
$ssql = "SELECT tbankr.* FROM tbankr 
		 WHERE deleted_at is null AND username='$email'";
$query = mysqli_query($conn, $ssql);
if ($query->num_rows == 0) {
	//email yang dimaksukkan salah
	$_SESSION['login'] = false;
	header('Location:login.php?message=1');
} else {
	while ($row = mysqli_fetch_assoc($query)) {
		if ($row['password'] == md5($password)) {
			//buat variabel login
			$_SESSION['login'] = true;
			$_SESSION['user'] = $row['name'];
			$_SESSION['foto'] = $row['fotouser'];
			header('Location:AdminLTE/starter.php');
		} else {
			$_SESSION['login'] = false;
			header('Location:login.php?message=2');
		}
	}
}