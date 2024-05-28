<?php 

// Koneksi ke Database
function koneksi() {
    return mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040152');   
}


//querry ke Tabel Mahasiswa
function query($query) {
    $conn = koneksi();
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
    }
    return $rows;
}

function registrasi($data)
{
    $conn = koneksi();

   $gambar = "deffault.img";
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $idrole = 2;

    $query = "INSERT INTO users
                VALUES
                (null, '$gambar', '$username', '$email', '$password', '$idrole')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
 
}
?>
