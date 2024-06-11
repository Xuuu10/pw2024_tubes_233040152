<?php
require '../functions.php';

// Jika tombol tambah di klik
if (isset($_POST['tambah'])) {
  if (tambahmember($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  }

}

?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>XUUU GYM | Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class="container col-8">

    <h1>Tambah Data Paket Member</h1>

    <form action="" method="POST">
      <div class="mb-3">
        <label for="gambar" class="form-label">gambar</label>
        <input type="file" class="form-control" id="nama" name="gambar">
      </div>
      <div class="mb-3">
        <label for="paket" class="form-label">Paket</label>
        <input type="text" class="form-control" id="paket" name="paket" required>
      </div>
      <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <input type="vartext" class="form-control" id="deskripsi" name="deskripsi" required>
      </div>

      <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>

    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>