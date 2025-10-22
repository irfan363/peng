<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #ffffff, #1549f3);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      background: rgba(255, 255, 255, 0.1);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      text-align: center;
      width: 350px;
      backdrop-filter: blur(10px);
    }

    h1 {
      margin-bottom: 20px;
      font-size: 24px;
      letter-spacing: 1px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 12px;
      margin: 15px 0;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .crud-btn {
      background: #0c0291;
      color: #fff;
    }
    .crud-btn:hover {
      background: #1f1f1f;
      transform: scale(1.05);
    }

    .home-btn {
      background: #0c0291;
      color: #fff;
    }
    .home-btn:hover {
      background: #1f1f1f;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Halaman Admin</h1>
    <button class="btn crud-btn" onclick="window.location.href='input.php'">🔧 Kelola Data (CRUD)</button>
    <button class="btn home-btn" onclick="window.location.href='game.php'">🏠 Kembali ke Halaman Utama</button>
  </div>
</body>
</html>
