<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENGGAME - Mainkan Dunia Tanpa Batas</title>
    <style>
        /* Reset dan dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: #0c0c0c;
            color: white;
            overflow-x: hidden;
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            z-index: 10;
            backdrop-filter: blur(6px);
        }

        header h1 {
            font-size: 24px;
            font-weight: 700;
            color: #ffd700;
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 25px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 16px;
            transition: 0.3s;
        }

        nav ul li a:hover {
            color: #ffd700;
        }

        /* Hero slider */
        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
        }

        .slides {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 1s ease-in-out;
        }

        .slide {
            width: 100%;
            flex-shrink: 0;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 2;
        }

        .hero h2 {
            font-size: 56px;
            margin-bottom: 20px;
            color: #ffd700;
            text-shadow: 2px 2px 8px black;
        }

        .hero p {
            font-size: 22px;
            margin-bottom: 30px;
            color: #eee;
        }

        .hero a {
            background: #ffd700;
            color: black;
            padding: 12px 28px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .hero a:hover {
            background: #e6c200;
            transform: scale(1.05);
        }

        /* Tombol slide */
        .prev, .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 24px;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            z-index: 3;
        }

        .prev { left: 10px; }
        .next { right: 10px; }

        /* Section Tentang */
        section {
            padding: 100px 60px;
            text-align: center;
            background: #111;
        }

        section h3 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #ffd700;
        }

        section p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
            color: #ccc;
        }

        /* Fitur game */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .card {
            background: #1a1a1a;
            border-radius: 20px;
            padding: 30px 20px;
            transition: 0.3s;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.1);
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
        }

        .card img {
            width: 100%;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .card h4 {
            font-size: 20px;
            margin-bottom: 10px;
            color: #ffd700;
        }

        .card p {
            font-size: 16px;
            color: #bbb;
        }

        /* Footer */
        footer {
            background: #000;
            color: #ccc;
            text-align: center;
            padding: 25px 0;
            font-size: 14px;
            margin-top: 50px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .hero h2 {
                font-size: 36px;
            }
            header {
                padding: 15px 30px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>PENGGAME</h1>
        <nav>
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#tentang">Tentang</a></li>
                <li><a href="#fitur">Fitur</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- SLIDER GAMBAR -->
    <div class="hero">
        <div class="slides" id="slides">
            <div class="slide" style="background-image: url('ft/nrt.jpg');"></div>
            <div class="slide" style="background-image: url('ft/balap.jpg');"></div>
            <div class="slide" style="background-image: url('ft/finalf.jpg');"></div>
        </div>
        <div class="overlay"></div>
        <div class="hero-content">
            <h2>Selamat Datang di PENGGAME</h2>
            <p>KARENA HIDUP BUTUH MODE PLAY.</p>
            <a href="login.php">Main Sekarang</a>
        </div>
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>


    <!-- Fitur -->
    <section id="fitur">
        <h3>Fitur Unggulan</h3>
        <div class="features">
            <div class="card">
                <img src="ft/eldenring.jpg" alt="Diskon">
                <h4>Harga Bersahabat</h4>
                <p>Dapatkan game premium dengan harga yang jauh lebih murah dari toko lain.</p>
            </div>
            <div class="card">
                <img src="ft/horizon.jpg" alt="Instant">
                <h4>Proses Instan</h4>
                <p>Game langsung dikirim ke akunmu setelah pembayaran selesai.</p>
            </div>
            <div class="card">
                <img src="ft/nba.jpg" alt="Support">
                <h4>Support 24 Jam</h4>
                <p>Tim kami siap membantu kamu kapan saja jika ada kendala.</p>
            </div>
        </div>
    </section>
    <section id="tentang">
        <h3>Tentang Kami</h3>
        <p>
            🎮 Kami hadir untuk memberikan pengalaman bermain terbaik dengan harga terjangkau.
            Main lebih banyak, bayar lebih sedikit, dan nikmati dunia game tanpa batas bersama PENGGAME!
        </p>
    </section>

    <footer>
        &copy; 2025 PENGGAME. Semua Hak Dilindungi.
    </footer>

    <script>
        // Script slider otomatis dan manual
        let index = 0;
        const slides = document.getElementById('slides');
        const totalSlides = slides.children.length;

        function moveSlide(step) {
            index = (index + step + totalSlides) % totalSlides;
            slides.style.transform = `translateX(-${index * 100}%)`;
        }

        // Ganti gambar otomatis tiap 5 detik
        setInterval(() => moveSlide(1), 5000);
    </script>
</body>
</html>
