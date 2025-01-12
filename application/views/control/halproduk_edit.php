<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Produk</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    />
</head>
<body style="font-family: 'Arial', sans-serif; background-color: #f9f9f9; padding: 20px;">
<div class="container">
    <h2 class="mb-4 text-center" style="color: #00e600;">Edit Data Produk</h2>
    <form action="<?php echo site_url('c_halproduk/update/' . $produk['id_produk']); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama_produk" class="form-label">Jenis Tanaman</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?php echo htmlspecialchars($produk['nama_produk']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="deskripsi_produk" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3" required><?php echo htmlspecialchars($produk['deskripsi_produk']); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="harga_produk" class="form-label">Harga Tanaman</label>
            <input type="number" class="form-control" id="harga_produk" name="harga_produk" value="<?php echo htmlspecialchars($produk['harga_produk']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="stok_produk" class="form-label">Stok Tanaman</label>
            <input type="number" class="form-control" id="stok_produk" name="stok_produk" value="<?php echo htmlspecialchars($produk['stok_produk']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="kategori_produk" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="kategori_produk" name="kategori_produk" value="<?php echo htmlspecialchars($produk['kategori_produk']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="foto_produk" class="form-label">Foto Produk</label>
            <input type="file" class="form-control" id="foto_produk" name="foto_produk" accept="image/*">
            <?php if (!empty($produk['foto_produk'])) { ?>
                <div class="mt-2">
                    <p>Foto saat ini:</p>
                    <img src="<?php echo base_url('uploads/' . $produk['foto_produk']); ?>" alt="Foto Produk" width="150">
                </div>
            <?php } ?>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?php echo site_url('c_halproduk'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
