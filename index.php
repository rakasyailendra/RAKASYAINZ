<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi Pegawai</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            
            if ($username === "admin" && $password === "admin123") {
                $_SESSION['logged_in'] = true;
                echo "<h2>Selamat datang, Admin!</h2>";
            } else {
                echo "<p>Login gagal. Cek username atau password Anda.</p>";
            }
        }
        ?>

        <?php
        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        ?>
            <h1>Login</h1>
            <form method="POST">
                <label for="username">Nama:</label>
                <input type="text" name="username" id="username" required>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                <button type="submit" name="login">Login</button>
            </form>
        <?php
        }
        ?>
    </div>
</body>
</html>
