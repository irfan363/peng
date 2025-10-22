<?php
include 'koneksinput.php'; 

$data = mysqli_query($koneksi, "SELECT * FROM input ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ipenggame</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>🎮 Penggame</h1>
        <nav>
            <ul>
                <li><a href="lp.php">back</a></li>
                <li><a href="login.php">login</a></li>
            </ul>
        </nav>
    </header>

    <section id="home" class="hero">
        <h2>Selamat Datang di list penggame</h2>
        <p>Tempat bermain dan menemukan game seru favoritmu.</p>
    </section>

    <<section id="games" class="games-section">
    <h2>🎯 Daftar Game</h2>
    <div class="game-list">
        <?php while($d = mysqli_fetch_array($data)) { ?>
            <div class="game-card">
            <img src="ft/<?php echo $d['gambar']; ?>" alt="<?php echo $d['nama']; ?>">
                <h3><?php echo $d['nama']; ?></h3>
                <h3>$ <?php echo number_format($d['harga']); ?></h3>
                <p><?php echo $d['keterangan']; ?></p>
            </div>
        <?php } ?>
    </div>
</section>


    <section id="about" class="about">
        <h2>ℹTentang Kami</h2>
        <p>Penggame adalah website yang menyediakan informasi dan link untuk berbagai game seru. Kami ingin memberikan pengalaman terbaik bagi para gamer.</p>
    </section>

    <footer>
        <p>© 2025 Penggame. Semua Hak Dilindungi.</p>
    </footer>
</body>
</html>