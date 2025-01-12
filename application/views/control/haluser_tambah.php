<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pembeli</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    />
</head>
<body style="font-family: 'Arial', sans-serif; background-color: #f9f9f9; padding: 20px;">
<div class="container">
    <h2 class="mb-4 text-center" style="color: #00e600;">Tambah Data Pembeli</h2>
    <form action="<?php echo site_url('c_haluser/simpan'); ?>" method="post">
        <div class="mb-3">
            <label for="id_pembeli" class="form-label">ID Pembeli</label>
            <input type="text" class="form-control" id="id_pembeli" name="id_pembeli" required>
        </div>
        <div class="mb-3">
            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
            <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" required>
        </div>
        <div class="mb-3">
            <label for="alamat_pembeli" class="form-label">Alamat Pembeli</label>
            <textarea class="form-control" id="alamat_pembeli" name="alamat_pembeli" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="email_pembeli" class="form-label">Email Pembeli</label>
            <input type="email" class="form-control" id="email_pembeli" name="email_pembeli" required>
        </div>
        <div class="mb-3">
            <label for="no_hp_pembeli" class="form-label">No. HP Pembeli</label>
            <input type="text" class="form-control" id="no_hp_pembeli" name="no_hp_pembeli" required>
        </div>
        <button type="submit" class="btn btn-success" style="background-color: #008000; color: white;">Simpan</button>
        <a href="<?php echo site_url('c_haluser'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
