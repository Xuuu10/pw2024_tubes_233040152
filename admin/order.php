<?php

require '../functions.php';
$paket_options = get_paket_options();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h1> Pesanan Anda </h1>
        <div class="row">
            <div class="card p-5 rounded">

                <form method="post" action="submit_order.php">

                    <div class="row mb-4">

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example9">Paket</label>
                        <select id="form6Example9" name="paket" class="form-control">
                            <?php foreach ($paket_options as $option): ?>
                                <option value="<?= $option['paket'] ?>"><?= $option['paket'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form6Example1">First name</label>
                                <input type="text" id="form6Example1" name="first_name" class="form-control" />
                            </div>
                        </div>
                    
                        <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <label class="form-label" for="form6Example2">Last name</label>
                                <input type="text" id="form6Example2" name="last_name" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example5">Email</label>
                        <input type="email" id="form6Example5" name="email" class="form-control" />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Phone</label>
                        <input type="number" id="form6Example6" name="phone" class="form-control" />
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                        <label class="form-label" for="form6Example7">Pesan Tambahan</label>
                        <textarea class="form-control" id="form6Example7" name="message" rows="4"
                            placeholder="Contoh : Tambahan Trainer"></textarea>
                    </div>
                    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Place
                        order</button>
                </form>




            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>