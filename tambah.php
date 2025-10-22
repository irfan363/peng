<!DOCTYPE html>
<html>
<head>
	<title>Tambah Game</title>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap');
		@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap');

		body {
			font-family: 'Rajdhani', sans-serif;
			background:#ffffff;
			color: #e0e7ff;
			margin: 0;
			padding: 0;
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.card {
			background: rgba(15, 23, 42, 0.9);
			padding: 30px;
			border-radius: 18px;
			width: 500px;
			box-shadow: 0 0 20px rgba(59, 130, 246, 0.6), 0 0 40px rgba(139, 92, 246, 0.4);
			animation: fadeIn 0.7s ease;
		}

		.card h2 {
			font-family: 'Orbitron', sans-serif;
			text-align: center;
			font-size: 28px;
			margin-bottom: 5px;
			color: #38bdf8;
			text-shadow: 0 0 12px #38bdf8, 0 0 20px #6366f1;
		}

		.card h3 {
			text-align: center;
			color: #a5b4fc;
			font-size: 18px;
			margin-bottom: 25px;
		}

		.form-group {
			margin-bottom: 18px;
		}

		label {
			display: block;
			margin-bottom: 6px;
			color: #93c5fd;
			font-weight: bold;
			letter-spacing: 1px;
		}

		input[type="text"] {
			width: 100%;
			padding: 12px;
			border: 2px solid #334155;
			border-radius: 10px;
			background: #1e293b;
			color: #fff;
			font-size: 15px;
			transition: 0.3s;
		}

		input[type="text"]:focus {
			border-color: #38bdf8;
			background: #0f172a;
			box-shadow: 0 0 10px #38bdf8, 0 0 20px #6366f1;
			outline: none;
		}

		.btn {
			width: 100%;
			padding: 12px;
			border: none;
			border-radius: 12px;
			background: linear-gradient(90deg, #2563eb, #6366f1, #9333ea);
			color: white;
			font-size: 16px;
			font-weight: bold;
			cursor: pointer;
			transition: 0.3s;
			letter-spacing: 1px;
			box-shadow: 0 0 10px #38bdf8;
		}

		.btn:hover {
			transform: translateY(-2px) scale(1.03);
			background: linear-gradient(90deg, #0ea5e9, #4f46e5, #a855f7);
			box-shadow: 0 0 18px #7dd3fc, 0 0 30px #c084fc;
		}

		.back {
			display: block;
			text-align: center;
			margin-bottom: 15px;
			color: #7dd3fc;
			text-decoration: none;
			transition: 0.3s;
			font-weight: bold;
		}

		.back:hover {
			color: #c084fc;
			text-shadow: 0 0 8px #7dd3fc, 0 0 16px #c084fc;
		}

		@keyframes fadeIn {
			from {opacity: 0; transform: translateY(20px);}
			to {opacity: 1; transform: translateY(0);}
		}
	</style>
</head>
<body>
	<div class="card">
		<h2>🎮 CRUD</h2>
		<a href="input.php" class="back">← KEMBALI</a>
		<h3>Tambah Game Baru</h3>

		<form method="post" action="tambah_aksi.php">
		<div class="form-group">
				<label for="gambar">Link Gambar</label>
				<input type="text" id="gambar" name="gambar">
			</div>
		<div class="form-group">
				<label for="nama">Nama Game</label>
				<input type="text" id="nama" name="nama" required>
			</div>
			<div class="form-group">
				<label for="harga">Harga</label>
				<input type="text" id="harga" name="harga">
			</div>
			<div class="form-group">
				<label for="keterangan">Keterangan</label>
				<input type="text" id="keterangan" name="keterangan" required>
			</div>
			
			<button type="submit" class="btn">SIMPAN</button>
		</form>
	</div>
</body>
</html>
