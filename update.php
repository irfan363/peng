<?php
// koneksi database
include 'koneksinput.php';

// validasi / sanitasi sederhana
$id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
$gambar = isset($_POST['gambar']) ? $_POST['gambar'] : '';
$nama = isset($_POST['nama']) ? mysqli_real_escape_string($koneksi, $_POST['nama']) : '';
$harga = isset($_POST['harga']) ? mysqli_real_escape_string($koneksi, $_POST['harga']) : '';
$keterangan = isset($_POST['keterangan']) ? mysqli_real_escape_string($koneksi, $_POST['keterangan']) : '';

// SQL yang benar: perhatikan koma antar kolom dan tidak ada koma sebelum WHERE
$sql = "UPDATE input
        SET gambar = '$gambar',
            nama = '$nama',
            harga = '$harga',
            keterangan = '$keterangan'
        WHERE id = $id";

mysqli_query($koneksi, $sql) or die('Query error: ' . mysqli_error($koneksi));

header("Location: input.php");
exit;
?>
