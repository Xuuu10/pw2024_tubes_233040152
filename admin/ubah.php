<?php
require '../functions.php';

$id = $_GET['id'];
$mhs = query("SELECT * FROM users WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'user.php';
          </script>";
  }

}

?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page | Data User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class="container col-8">

    <h1>Form Ubah Data User</h1>

    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
      <div class="mb-3">
        <label for="gambar" class="form-label">Gambar</label>
        <input type="img" class="form-control" id="gambar" name="gambar" value="<?= $mhs['gambar']; ?>">
      </div>
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="nama" name="username" value="<?= $mhs['username']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" value="<?= $mhs['email']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" value="<?= $mhs['password']; ?>" required>
      </div>
      <div class="mb-3">
        <label for="id_role" class="form-label">Id_role</label>
        <input type="text" class="form-control" id="id_role" name="id_role" value="<?= $mhs['id_role']; ?>" required>
      </div>

      <button type="submit" name="ubah" class="btn btn-primary">Ubah Data</button>

    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>