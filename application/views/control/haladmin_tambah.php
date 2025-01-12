<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Admin</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    />
</head>
<body style="font-family: 'Arial', sans-serif; background-color: #f9f9f9; padding: 20px;">
<div class="container">
    <h2 class="mb-4 text-center" style="color: #00e600;">Tambah Admin Baru</h2>

    <form action="<?php echo site_url('c_haladmin/simpan'); ?>" method="post">
        <div class="mb-3">
            <label for="id_admin" class="form-label">Id admin</label>
            <input type="text" class="form-control" id="id_admin" name="id_admin" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username"required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="nama_admin" class="form-label">Nama Admin</label>
            <input type="text" class="form-control" id="nama_admin" name="nama_admin" required>
        </div>
        <button type="submit" class="btn btn-success" style="background-color: #008000; color: white;">Simpan</button>
        <a href="<?php echo site_url('c_haladmin'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
