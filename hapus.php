<?php 
// koneksi database
include 'koneksinput.php';
 
// menangkap data id yang di kirim dari url
$nama = $_GET['nama'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from input where nama='$nama'");
 
// mengalihkan halaman kembali ke index.php
header("location:input.php");
 
?>