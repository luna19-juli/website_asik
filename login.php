<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #121212;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        color: #e0e0e0;
    }

    .container {
        display: flex;
        width: 900px;
        background-color: #1e1e1e;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        overflow: hidden;
    }

    .login-container {
        padding: 50px;
        width: 50%;
    }

    .login-container h3 {
        margin-bottom: 20px;
        color: #FFFFFF; /* Ubah menjadi warna hijau */
        font-size: 24px;
    }

    .login-container input[type="text"],
    .login-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #333;
        background-color: #2e2e2e;
        color: #e0e0e0;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .login-container button {
        width: 100%;
        padding: 10px;
        background-color: #0f0; /* Ubah menjadi warna hijau */
        color: #121212;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    .login-container button:hover {
        background-color: #388E3C; * Warna hijau lebih gelap untuk hover *
    }

    .login-container a {
        display: block;
        margin-top: 15px;
        color: #0f0; * Ubah menjadi warna hijau *
        text-decoration: none;
    }

    .login-container a:hover {
        text-decoration: underline;
    }

    .image-container {
        width: 50%;
        background-image: url('mangrove.jpg'); 
        background-size: cover;
        background-position: center;
        filter: brightness(0.7);
    }
</style>

</head>
<body>

<?php
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Query untuk memeriksa apakah username dan password sesuai
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

    // Jika data ditemukan
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $_SESSION['user'] = $data;
        echo '<script>alert("Selamat datang, ' . $data['nama'] . '"); location.href="index.php";</script>';
    } else {
        // Jika username atau password tidak cocok
        echo '<script>alert("Username atau password tidak sesuai.");</script>';
    }
}
?>
<div class="intro">
            <h2>Hi WELLCOME!<br>WEBSITE <span>EcoMangrove</span></h2>
            <p>marine sistem information.</p>
<div class="container">
    <div class="login-container">
        <h3>Login User</h3>
        <form method="post">
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
            <a href="daftar.php">Daftar</a>
        </form>
    </div>
    <div class="image-container"></div> <!-- Tambahkan gambar sesuai kebutuhan -->
</div>

</body>
</html>
