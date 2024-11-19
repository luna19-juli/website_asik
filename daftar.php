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
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .login-container {
            padding: 50px;
            width: 50%;
        }

        .login-container h3 {
            margin-bottom: 20px;
            color: #333;
            font-size: 24px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #0f0; /* Sesuaikan warna */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-container button:hover {
            background-color: #388E3C;
        }

        .login-container a {
            display: block;
            margin-top: 15px;
            color: #0f0;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .image-container {
            width: 50%;
            background-image: url('image-path.jpg'); /* Ganti dengan path gambar yang kamu inginkan */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>

<?php
    if (isset($_POST['username'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi, "INSERT INTO user(nama, username, password) VALUES('$nama', '$username', '$password')");
        if ($query){
            echo "<script>alert('Selamat, pendaftaran anda berhasil, silahkan login.')</script>";
        } else{
            echo "<script>alert('Maaf, pendaftaran gagal.')</script>";
        }
    }
?>
<div class="intro">
            <h2>Hi! Let's make your dream come true now!<br>WEBSITE <span>EcoMangrove</span></h2>
            <p>marine sistem information.</p>
<div class="container">
    <div class="login-container">
        <h3>Pendaftaran User</h3>
        <form method="post">
            <input type="text" name="nama" placeholder="Enter your name" required>
            <input type="text" name="username" placeholder="Enter your username" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Daftar User</button>
            <a href="login.php">Login</a>
        </form>
    </div>
    <div class="image-container"></div> 
</div>

</body>
</html>
