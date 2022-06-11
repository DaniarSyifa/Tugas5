<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010054";
$db = "klinik_312010054";
$conn = mysqli_connect('localhost','adminklinik','312010054','klinik_312010054');

if ($conn == false)
{

	echo "Koneksi ke server gagal.";
	die();

} else echo "Koneksi berhasil";
?>