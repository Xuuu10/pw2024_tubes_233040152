<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040152');

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) > 0) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        $_SESSION["login"] = true;
        if ($row['id_role'] == '1') {
            header("Location: admin.php");
            exit;
        } else { 
            header("Location: index.php");
            exit;
        }
        // set session

    }

}

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
            <form action="" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon></ion-icon></span>
                    <input type="username" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon></ion-icon></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon></ion-icon></span>
                    <input type="password" name="password" required>
                    <label>password</label>
                </div>
                <div class="ingat">
                    <label><input type="checkbox">Remember Me</label>
                </div>
                <button type="submit" name="login" class="btn">Login</button>
                <div class="login">
                    <p>No Have Acount? <a href="registrasi.php" class="login-link"> Register </a></p>
                </div>
            </form>
        </div>
    </div>
    </div>

</body>

</html>