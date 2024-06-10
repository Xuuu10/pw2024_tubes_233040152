<?php

require '../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $paket = $_POST['paket'];

    // Panggil fungsi untuk menyimpan data ke database
    save_order($paket, $first_name, $last_name, $email, $phone, $message);
}

header('Location: success_page.php');
exit;

?>