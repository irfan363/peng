<?php

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Player</title>
    <link rel="stylesheet" href="l.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-box">
    <div style="height: 44%;
    padding: 1px;%">
        <a href="game.php">
        <button type="submit">back</button>
        </a>
    </div>

        <h2>Login Player</h2>
        <form action="cek.php" method= "post">
            <div class="input-box">
            <input type="text" name="username"   required="required">
                <label>Username</label>
            </div>
            <div class="input-box">
            <input type="password" name="password"   required="required">
                <label>Password</label>
            </div>
            <button type="submit">Start Game</button>
        </form>
        <p class="signup">Belum punya akun? <a href="game.php">Daftar Sekarang</a></p>
    </div>
</body>
</html>
