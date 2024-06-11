<?php
require '../../functions.php';
$user = cari($_GET['keyword']);
?>

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
              <td><img src="../asset/img/<?= $u['gambar']; ?>" width="70"></td>
              <td><?= $u['username']; ?></td>
              <td><?= $u['email']; ?></td>
              <td><?= $u['password']; ?></td>
              <td><?= $u['id_role']; ?></td>
              <td>

                <a href="ubah.php?id=<?= $u['id']; ?>" class="badge text-bg-warning text-decoration-none">ubah</a>

                <a href="hapus.php?id=<?= $u['id']; ?>" onclick="return confirm('Are You Sure?');"
                  class="badge text-bg-danger text-decoration-none">hapus</a>

              </td>
            </tr>

            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>

