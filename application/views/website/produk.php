<!DOCTYPE html>
<html lang="en">
<head>
    <title>PERTANIAN DESA GURUH BARU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@feathericons/feather@4.28.0/dist/feather.min.js"></script>
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" />
</head>
<body>
<div class="navbar navbar-expand-lg navbar-light" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
    <div class="navi-container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav mx-auto collapse navbar-collapse" id="navbarNav">
            <li class="nav-item"><a href="<?php echo site_url('dashboard'); ?>" class="nav-link">Beranda</a></li>
            <li class="nav-item"> <a href="<?php echo site_url('produk'); ?>" class="nav-link">Produk</a></li>
            <li class="nav-item"> <a href="<?php echo site_url('berita'); ?>" class="nav-link">Berita</a></li>
            <li class="nav-item"> <a href="<?php echo site_url('kontak'); ?>" class="nav-link">Kontak</a></li>
        </ul>
    </div>
    <div class="ml-auto" style="position: absolute; right: 0; top: 50%; transform: translateY(-50%);">
        <a href="<?php echo site_url('userlogin'); ?>" 
           class="btn btn-outline-primary ml-auto" 
           style="border-radius: 50px; border: 2px solid #00796b; color: #00796b; background-color: transparent; padding: 5px 20px; 
                  text-decoration: none; transition: color 0.3s, background-color 0.3s;"
           onmouseover="this.style.color='#fff'; this.style.backgroundColor='#00796b'; this.style.borderColor='#00796b';"
           onmouseout="this.style.color='#00796b'; this.style.backgroundColor='transparent'; this.style.borderColor='#00796b';">
            Login
        </a>
    </div>
</div>
    <div class="content-wrapper" style="min-height: 500px; display: flex; flex-direction: column;">
        <div class="navgasi-container">
            <h2 class="article-title">Pertanian Produk</h2>
            <span class="underline"></span>
        </div>
        <div class="container mt-5">
    <div class="row">
        <?php if (!empty($produk)): ?>
            <?php foreach ($produk as $item): ?>
                <div class="col-md-3 mb-4" style="display: flex; justify-content: center;">
                    <div class="card shadow-sm h-100" style="border: 1px solid #ddd; border-radius: 10px; overflow: hidden;">
                    <img src="<?= base_url('uploads/' . $item['foto_produk']); ?>" 
                            class="card-img-top" alt="<?= $item['nama_produk']; ?>" 
                            style="width: 100%; height: 200px; object-fit: contain;">
                        <div class="card-body" style="padding: 1.5rem; background-color: #fff;">
                            <h5 class="card-title" style="font-size: 1.2rem; font-weight: bold; color: #333;"><?= $item['nama_produk']; ?></h5>
                            <p class="card-text" style="font-size: 0.95rem; color: #555;"><?= substr($item['deskripsi_produk'], 0, 100); ?>...</p>
                            <p style="font-size: 1rem; color: #000;"><strong>Harga:</strong> Rp<?= number_format($item['harga_produk'], 0, ',', '.'); ?></p>
                            <p style="font-size: 1rem; color: #000;"><strong>Stok:</strong> <?= $item['stok_produk']; ?></p>
                            <p style="font-size: 1rem; color: #000;"><strong>Kategori:</strong> <?= $item['kategori_produk']; ?></p>
                        </div>
                        <div class="card-footer" style="background-color: #fff; text-align: center;">
                            <a href="https://wa.me/+6282285512091" class="btn btn-primary btn-sm" style="background-color: #00796b; border-color: #00796b; padding: 5px 10px; text-decoration: none; color: white;">Pesan</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center" style="font-size: 1.2rem; color: #555;">Tidak ada produk yang tersedia.</p>
        <?php endif; ?>
    </div>
</div>



        <!-- coba -->

        <!-- data php -->

        <div class="nav-container" style="margin-top: 200px;">
            <div class="info-section">
                <h2 class="info-title">Informasi Penting</h2>
                <p class="info-content">
                    Selamat datang di situs kami! Temukan informasi terbaru mengenai layanan dan promosi menarik lainnya di sini. 
                    Jika ada pertanyaan lebih lanjut, silakan hubungi kami melalui <a style="color: black;">kelompokhoreg@gmail.com</a>.
                </p>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <div>
                <h4>KONTAK KAMI</h4>
                <p><i class="bi bi-telephone" style="color: white;"></i> 0822 8551 2091</p>
                <p><i class="bi bi-envelope" style="color: white;"></i> kelompokhoreg@gmail.com</p>
            </div>
            <div>
                <h4>ALAMAT</h4>
                <p><i class="bi bi-geo-alt" style="color: white;"></i> Jl. Kemuning No. 168 <br>Condongcatur, Depok<br>Sleman, DI Yogyakarta</p>
            </div>
            <div>
                <h4>SOSIAL MEDIA</h4>
                <div class="social-icons">
                    <a href="https://www.youtube.com/@hxorine2897" target="_blank" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.facebook.com/Hxorine" target="_blank" aria-label="Facebook">
                        <i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/ryafyn?igsh=MWJxdnV5MTlzNGI2Zw==" target="_blank" aria-label="Instagram">
                        <i class="bi bi-instagram"></i></a>
                </div>
                <div class="star-rating">
                    <span>Berikan Bintang!</span>
                    <span class="stars">
                        <i class="bi bi-star" onclick="setRating(1)"></i>
                        <i class="bi bi-star" onclick="setRating(2)"></i>
                        <i class="bi bi-star" onclick="setRating(3)"></i>
                        <i class="bi bi-star" onclick="setRating(4)"></i>
                        <i class="bi bi-star" onclick="setRating(5)"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="copyright" style="text-align: center;">
            &copy; Kelompok HOREG | 2024
        </div>
    </footer>

    <button class="scroll-to-top" onclick="scrollToTop('smooth')">
        <i class="fa fa-chevron-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        feather.replace();
    </script>
    <script>
        function scrollToTop(behavior = "smooth") {
            window.scrollTo({ top: 0, behavior: behavior });
        }
    </script>
    <script>
    let rating = 0;
    function setRating(star) {
        rating = star;
        updateStars();
    }
    function updateStars() {
        const stars = document.querySelectorAll('.star-rating .bi-star');
        stars.forEach((star, index) => {
            if (index < rating) {
                star.style.color = '#ffce31';
            } else {
                star.style.color = '#ddd';
            }
        });
    }
</script>
</body>
</html>
