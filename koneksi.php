<?php

$host     = "localhost";
$username = "root";
$password = "";
$tb       = "tb_siswa";

$koneksi = mysqli_connect($host,$username,$password,$tb);

if(mysqli_connect_errno()){
	echo "Koneksi Database Gagal : " . mysqli_connect_error();
}else{
	echo "Koneksi Database Berhasil";
}
?>