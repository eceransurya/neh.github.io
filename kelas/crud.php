<?php
//perintah koneksi db
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'angkringan';

$koneksi = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//perintah membaca database
$ssql = 'select tbankr.* from tbankr where deleted_at is null';
$query = mysqli_query($koneksi, $ssql);
while ($row = mysqli_fetch_array($query)) {
	echo $row[0] . ' ';
	echo $row[1] . ' ';
	echo $row[2] . '<br>';
}

while ($row = mysqli_fetch_assoc($query)) {
	echo $row['Id'] . ' ';
	echo $row['username'] . ' ';
	echo $row['password'] . '<br>';
}