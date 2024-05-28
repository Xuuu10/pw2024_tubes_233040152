<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data Pelanggan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/tambahdata.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Tambah Data Pelanggan</h2>
        <form>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" required>
            </div>
            <div class="form-group">
                <label for="telepon">Telepon:</label>
                <input type="tel" class="form-control" id="telepon" placeholder="Masukkan Telepon" required>
            <div class="form-group mt-3 text-bold">
                    <label for="telepon">Gambar</label>
                    <input type="file" id="gambar" placeholder="Masukkan Gambar" required>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>