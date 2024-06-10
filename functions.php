<?php

// Koneksi ke Database

session_start();

function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040152');
}


//querry ke Tabel Mahasiswa
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data["gambar"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $idrole = 2;


    // enkripsi Password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users
                VALUES
                (null, '$gambar', '$username', '$email', '$password', '$idrole')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}


function upload()
{

    $conn = koneksi();

    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang dipilih

    if ($error == 4) {
        echo "<script>
             alert('pilih gambar terlebih dahulu');
            </script> ";
        return false;
    }


    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
            alert('yang anda pilih bukan gambar!');
           </script> ";
        return false;
    }


    // cek type file
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png' ) {
        echo "<script>
        alert('yang anda pilih bukan gambar!');
       </script> ";
       return false;
   }

    //  cek ukuran
    // maksimal 5MB = 5000000

    if ($ukuran_file > 5000000) {

        echo "<script>
        alert('ukuran gambar terlalu besar');
       </script> ";
       return false;

    }

    // lolos pengecekan 
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    move_uploaded_file($tmp_file, '../asset/img/' . $nama_file_baru);


    return $nama_file_baru;


}

function tambah($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $id_role = htmlspecialchars($data["id_role"]);

    $password = password_hash($password, PASSWORD_DEFAULT);

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO users
                VALUES
                (null, '$gambar', '$username', '$email', '$password', '$id_role')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}



function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM users WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = $data["id"];
    $gambar = htmlspecialchars($data["gambar"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $id_role = htmlspecialchars($data["id_role"]);

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE users SET
                gambar = '$gambar',
                username = '$username',
                email = '$email',
                password = '$password',
                id_role = '$id_role'
                WHERE id =$id
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function tambahmember($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data["gambar"]);
    $judul = htmlspecialchars($data["judul"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO members
                VALUES
                (null, '$gambar', '$judul', '$deskripsi')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function cari($keyword)
{
    $conn = koneksi();
    $query = "SELECT * FROM users
                WHERE
                username LIKE '$keyword%'
                ";

    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    return $result;
}


function save_order($paket, $first_name, $last_name, $email, $phone, $message)
{
    $conn = koneksi();

    $sql = "INSERT INTO pemesanan (paket, first_name, last_name, email, phone, message) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt === false) {
        die('Prepare Error: ' . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, 'ssssss', $paket, $first_name, $last_name, $email, $phone, $message);

    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_error($stmt)) {
        die('Execute Error: ' . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}


function get_paket_options()
{
    $conn = koneksi();
    $sql = "SELECT id, paket FROM members";
    $result = mysqli_query($conn, $sql);
    $paket_options = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $paket_options[] = $row;
    }

    mysqli_close($conn);

    return $paket_options;
}



