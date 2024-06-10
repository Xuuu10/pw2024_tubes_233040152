<?php
require 'functions.php';

if (isset($_POST['register'])) {

    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('user baru berhasil ditambahkan!')
            document.location.href = 'login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Xuuu Web</title>
    <link rel="stylesheet" href="asset/css/registrasi.css">
</head>

<body>

    <div class="container">

        <div class="form-box register">
            <h2> Register </h2>
            <form action="" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="username"></ion-icon></span>
                    <input type="text" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="email"></ion-icon></span>
                    <input type="text" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="ingat">
                    <label><input type="checkbox">
                        Remember Me </label>
                </div>
                <button type="submit" name="register" class="btn">Register</button>
                <div class="login-register">
                    <a href="login.php" class="login-link">
                        <p>Punya Akun?</p>
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>