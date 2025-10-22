<!DOCTYPE html>
<html>
<head>
	<title>Edit Game</title>
	<style>
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background: #1b1b1b;
			color: #f2f2f2;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			min-height: 100vh;
			margin: 0;
		}

		h2, h3 {
			color: #00c6ff;
			margin-bottom: 10px;
		}

		a {
			color: #00c6ff;
			text-decoration: none;
			background: #333;
			padding: 6px 12px;
			border-radius: 6px;
			transition: background 0.2s;
		}

		a:hover {
			background: #00c6ff;
			color: #000;
		}

		form {
			background: #2b2b2b;
			padding: 25px 35px;
			border-radius: 12px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
			margin-top: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
		}

		td {
			padding: 10px;
			font-size: 15px;
		}

		input[type="text"] {
			width: 100%;
			padding: 8px;
			border: none;
			border-radius: 6px;
			background: #3b3b3b;
			color: #f2f2f2;
			outline: none;
			transition: 0.2s;
		}

		input[type="text"]:focus {
			background: #444;
			box-shadow: 0 0 0 2px #00c6ff;
		}

		input[type="submit"] {
			background: #00c6ff;
			color: #000;
			border: none;
			padding: 10px 20px;
			font-weight: bold;
			border-radius: 8px;
			cursor: pointer;
			transition: background 0.3s;
		}

		input[type="submit"]:hover {
			background: #00a0cc;
		}
	</style>
</head>
<body>
 
	<h2>EDIT GAME</h2>
	<a href="input.php">← KEMBALI</a>

	<?php
	include 'koneksinput.php';
	$nama = $_GET['nama'];
	$data = mysqli_query($koneksi, "SELECT * FROM input WHERE nama='$nama'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>Gambar</td>
					<td><input type="text" name="gambar" value="<?php echo $d['gambar']; ?>"></td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>"> 
						<input type="hidden" name="nama_lama" value="<?php echo $d['nama']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
				</tr>
				<tr>
					<td>Keterangan</td>
					<td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
	<?php 
	}
	?>
 
</body>
</html>
