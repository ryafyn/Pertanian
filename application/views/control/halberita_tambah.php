<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Berita</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    />
</head>
<body style="font-family: 'Arial', sans-serif; background-color: #f9f9f9; padding: 20px;">
<div class="container">
    <h2 class="mb-4 text-center" style="color: #00e600;">Tambah Data Berita</h2>

    <?php if (validation_errors()): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors(); ?>
        </div>
    <?php endif; ?>

    <form action="<?php echo site_url('c_halberita/simpan'); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="judul_berita" class="form-label">Judul Berita</label>
            <input type="text" class="form-control" id="judul_berita" name="judul_berita" required>
        </div>
        <div class="mb-3">
            <label for="isi_berita" class="form-label">Isi Berita</label>
            <textarea class="form-control" id="isi_berita" name="isi_berita" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal_berita" class="form-label">Tanggal Berita</label>
            <input type="date" class="form-control" id="tanggal_berita" name="tanggal_berita" required>
        </div>
        <div class="mb-3">
            <label for="gambar_berita" class="form-label">Gambar Berita</label>
            <input type="file" class="form-control" id="gambar_berita" name="gambar_berita" accept="image/*" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo site_url('c_halberita'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
