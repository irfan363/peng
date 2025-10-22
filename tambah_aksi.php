<?php 
// koneksi database
include 'koneksinput.php';
 
// menangkap data yang di kirim dari form
$gambar = $_POST['gambar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$keterangan = $_POST['keterangan'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into input values('$id','$gambar','$nama','$harga','$keterangan')");
 
// mengalihkan halaman kembali ke index.php
header("location:input.php");
 
?>