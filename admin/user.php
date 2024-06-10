<?php
require '../functions.php';
$user = query("SELECT * FROM users");


if(isset($_POST["cari"])){
  $user = cari($_POST['keyword']);
}

?>





<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Page | Data User</title>
  <link rel="stylesheet" href="../asset/css/user.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <h1>Daftar Users</h1>

    <a href="tambah.php" class="btn btn-primary">Tambah Data Users</a>

    <form action="" method="post" class="d-flex mt-4 mb-5" role="search">
      <input class="keyword me-3" name="keyword" type="search" placeholder="Search" aria-label="Search" autocomplete="off">
      <button class="tombol-cari btn btn-outline-succes btn-primary" name="cari" type="submit">Search</button>
    </form>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Username</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">id_role</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>

        <?php $i = 1;
        foreach ($user as $u): ?>

          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $u['gambar']; ?></td>
            <td><?= $u['username']; ?></td>
            <td><?= $u['email']; ?></td>
            <td><?= $u['password']; ?></td>
            <td><?= $u['id_role']; ?></td>
            <td>

              <a href="ubah.php?id=<?= $u['id']; ?>" class="badge text-bg-warning text-decoration-none">ubah</a>

              <a href="hapus.php?id=<?= $u['id']; ?>" onclick="return confirm('Are You Sure?');" class="badge text-bg-danger text-decoration-none">hapus</a>

            </td>
          </tr>

          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>