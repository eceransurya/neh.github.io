<?php
//panggil session
session_start();
//hapus session yang telah tercipta sebelumnya
session_destroy();
//panggil halaman login
header('Location:login.php?message=0');