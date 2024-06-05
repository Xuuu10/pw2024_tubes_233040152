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


function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data["gambar"]);
    $username = htmlspecialchars($data["username"]);
    $email= htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $id_role = htmlspecialchars($data["id_role"]);

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

    $id =$data["id"];
    $gambar = htmlspecialchars($data["gambar"]);
    $username = htmlspecialchars($data["username"]);
    $email= htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $id_role = htmlspecialchars($data["id_role"]);

    $query = "UPDATE users SET
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
    $deskripsi= htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO members
                VALUES
                (null, '$gambar', '$judul', '$deskripsi')
             ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}








?>
