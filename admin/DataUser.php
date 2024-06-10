<?php
require '../functions.php';
$users = query("SELECT * FROM users");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemograman Web | Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <body>

  <div class="container">
		<h1>Daftar Pelanggan</h1>
		<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Gambar</th>
      <th scope="col">Username</th>
      <th scope="col">email</th>
      <th scope="col">Password</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
 
<?php foreach($users as $user) : ?>

    <tr>
      <th scope="row"><?= $user['id'] ?></th>
      <!-- <td><img src="../asset/img/<?= $user['gambar']; ?>" width="60"></td> -->
      <td><img src="../asset/img/about1.jpg" width="60"></td>
      <td><?= $user['username']; ?></td>
      <td><?= $user['email']; ?></td>
      <td><?= $user['password']; ?></td>
      <td>
        <a href="#" class="badge text-bg-warning text-decoration-none">ubah</a>
        <a href="#" class="badge text-bg-danger text-decoration-none">hapus</a>
      </td>
    </tr>
<?php endforeach; ?>   
  </tbody>
</table>
	</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>