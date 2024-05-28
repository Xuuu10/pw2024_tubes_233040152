<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM users");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Xuuu Web</title>
    <link rel="stylesheet" href="asset/css/login.css">


</head>


<body>
    
    <!--halaman daftar-->
    <div class="container">
     <div class="form-box login">
        <h2>Login</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon"><ion-icon name="username"></ion-icon></span>
                <input type="text" required>
                <label>Username</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="mail" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" required>
                <label>password</label>
            </div>
            <div class="ingat">
                <label><input type="checkbox">Ingat Aku Ya</label>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="login">
                <p>Tidak Punya Akun? <a href="registrasi.php" class="login-link"> daftar </a></p>
            </div>
        </form>
        </div>
    </div>
</div>
        
</body>

</html>