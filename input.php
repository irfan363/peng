<!DOCTYPE html>
<html>
<head>
	<title>Input Game</title>
	<style>
		/* Style umum */
		body {
			font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			background: #ffffff;
			color: #121212;
			text-align: center;
			margin: 0;
			padding: 20px;
		}

		h2 {
			color: #0c0291;
			text-shadow: 0 0 10px #0c0291, 0 0 20px #0c0291;
			margin-bottom: 20px;
		}

		/* Tombol umum */
		a.btn {
			text-decoration: none;
			color: #fff;
			padding: 8px 14px;
			border-radius: 8px;
			background: linear-gradient(45deg, #0044cc, #0c0291);
			box-shadow: 0 0 10px #0c0291;
			transition: 0.3s;
		}

		a.btn:hover {
			transform: scale(1.05);
			box-shadow: 0 0 20px #66ccff;
		}

		/* Tombol khusus untuk hapus */
		a.btn-hapus {
			background: linear-gradient(45deg, #cc0000, #ff4444);
			box-shadow: 0 0 10px #ff3333;
		}

		a.btn-hapus:hover {
			box-shadow: 0 0 20px #ff5555;
			transform: scale(1.05);
		}

		/* Wrapper tombol atas */
		.top-buttons {
			width: 90%;
			margin: 0 auto 20px auto;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		table {
			width: 90%;
			margin: 20px auto;
			border-collapse: collapse;
			box-shadow: 0 0 20px rgba(0, 255, 255, 0.5);
		}

		th, td {
			border: 1px solid #121212;
			padding: 12px;
			text-align: center;
		}

		/* Tabel head gradasi biru */
		th {
			background: linear-gradient(45deg, #0044cc, #0c0291);
			color: #ffffff;
			text-transform: uppercase;
			letter-spacing: 1px;
			text-shadow: 0 0 5px rgba(0,0,0,0.6);
		}

		tr:nth-child(even) {
			background: rgba(0, 255, 204, 0.08);
		}

		tr:hover {
			background: rgba(0, 204, 255, 0.2);
			transition: 0.3s;
		}

		img {
			width: 80px;
			height: auto;
			border-radius: 10px;
			box-shadow: 0 0 10px #121212;
		}

		td a {
			margin: 0 5px;
			display: inline-block;
		}
	</style>
</head>
<body>
 
	<h2>Daftar Game</h2>

	<!-- Tombol tambah & kembali -->
	<div class="top-buttons">
		<a href="tambah.php" class="btn">+ Tambah Game</a>
		<a href="admin.php" class="btn">🏠 Kembali </a>
	</div>

	<table>
		<tr>
			<th>id</th>
			<th>gambar</th>
			<th>nama</th>
			<th>harga</th>
			<th>keterangan</th>
			<th>Opsi</th>
		</tr>
		<?php 
		include 'koneksinput.php';
		$data = mysqli_query($koneksi,"select * from input");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['id']; ?></td>
				<td><img src="<?php echo $d['gambar']; ?>" alt=""></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td>
					<a href="edit.php?nama=<?php echo $d['nama']; ?>" class="btn">EDIT</a>
					<a href="hapus.php?nama=<?php echo $d['nama']; ?>" class="btn btn-hapus">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>
