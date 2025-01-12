
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

        </div>
        <div class="header">
            <div class="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= base_url('assets/images/header1.jpg'); ?>" class="d-block w-100" alt="Header Image 1">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/images/header2.jpg'); ?>" class="d-block w-100" alt="Header Image 2">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= base_url('assets/images/header3.jpg'); ?>" class="d-block w-100" alt="Header Image 3">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" onclick="shiftImage('prev')">
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" onclick="shiftImage('next')">
                </a>
            </div>
        </div>
        <div class="navgasi-container">
        <h2 class="article-title">Pertanian Terbaru</h2>
        <span class="underline"></span>
        <div class="categories">
            <div class="category-item active">Semua</div>
            <div class="category-item">Budidaya Ayam</div>
            <div class="category-item">Budidaya Gurami</div>
            <div class="category-item">Budidaya Ikan Hias</div>
            <div class="category-item">Hewan Kurban</div>
            <div class="category-item">Hidroponik</div>
            <div class="category-item">Industri Peternakan</div>
            <div class="category-item">Isu Pertanian</div>
            <div class="category-item">Kebijakan Pemerintah</div>
            <div class="category-item">Kopi</div>
            <div class="load-more">Lihat lebih banyak</div>
            <div class="nav-arrows">
                <div class="nav-arrow">&#9664;</div>
                <div class="nav-arrow">&#9654;</div>
            </div>
        </div>
    </div>

    <div class="hero-section" style="padding: 60px 0; font-family: Arial, sans-serif;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-text" style="text-align: left; margin-bottom: 30px;">
                    <h1 style="font-size: 36px; font-weight: bold; line-height: 1.3;">
                        Perdagangan langsung antara 
                        <span style="color: #008000;">Petani & Pembeli</span>
                    </h1>
                    <p style="font-size: 16px; line-height: 1.6; color: #555;">
                        Kami membantu petani memaksimalkan potensi keuntungan melalui data dan teknologi untuk mencari input dan alat pertanian yang langsung dapat diakses oleh petani. Kami juga menciptakan perdagangan langsung antara petani dan pembeli melalui platform yang berkelanjutan.
                    </p>
                    <a href="<?php echo site_url('kontak'); ?>" class="btn btn-outline-primary mt-3 kontak-kami-btn" 
                        style="padding: 10px 20px; border-radius: 50px; border: 2px solid #00796b; color: #00796b; text-decoration: none; transition: color 0.3s, background-color 0.3s;"
                        onmouseover="this.style.color='#fff'; this.style.backgroundColor='#00796b'; this.style.borderColor='#00796b';"
                        onmouseout="this.style.color='#00796b'; this.style.backgroundColor='transparent'; this.style.borderColor='#00796b';">
                            KONTAK KAMI
                    </a>
                </div>
                <div class="col-md-6 card-container" style="display: grid; grid-template-rows: auto auto auto; gap: 20px;">
                    <div class="info-card red" style="padding: 20px; background-color: #008000; color: #fff; border-radius: 10px;">
                        <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">Ratusan Produk Pertanian</h3>
                        <p style="font-size: 14px; line-height: 1.5;">
                            Cocok bagi Anda yang membutuhkan produk pertanian dalam jumlah besar.
                        </p>
                    </div>
                    <div class="info-card" style="padding: 20px; background-color: #f8f9fa; color: #333; border-radius: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);">
                        <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">Perdagangan Langsung</h3>
                        <p style="font-size: 14px; line-height: 1.5;">
                            Membantu petani dengan membeli langsung produk mereka.
                        </p>
                    </div>
                    <div class="info-card red" style="padding: 20px; background-color: #008000; color: #fff; border-radius: 10px;">
                        <h3 style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">Variasi Produk</h3>
                        <p style="font-size: 14px; line-height: 1.5;">
                            Produk pertanian dan alat pertanian yang bervariasi jenis dan jumlahnya.
                        </p>
                        <a href="<?php echo site_url('produk'); ?>" style="color: #fff; font-weight: bold; text-decoration: none;">LIHAT PRODUK →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-section" style="padding: 40px 0; font-family: Arial, sans-serif;">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
            <div style="position: relative;">
                <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 0; color: #000;">
                    Produk
                </h2>
                <div style="width: 60px; height: 4px; background-color: #008000; margin-top: 8px;"></div>
            </div>
                <a href="<?php echo site_url('produk'); ?>" 
                    style="background-color: #008000; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-size: 14px; font-weight: bold; display: inline-block; transition: background-color 0.3s, color 0.3s;"
                    onmouseover="this.style.backgroundColor='#00796b'; this.style.color='#fff';"
                    onmouseout="this.style.backgroundColor='#008000'; this.style.color='#fff';">
                        Semua Produk →
                </a>
            </div>
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
                        <div class="card-footer" style="background-color: #fff;">
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
<div class="berita-section" style="padding: 40px 0; font-family: Arial, sans-serif;">
    <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
        <div style="position: relative;">
            <h2 style="font-size: 32px; font-weight: bold; margin-bottom: 0; color: #000;">
                Berita
            </h2>
            <div style="width: 60px; height: 4px; background-color: #008000; margin-top: 8px;"></div>
        </div>
        <a href="<?php echo site_url('berita'); ?>" 
            style="background-color: #008000; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-size: 14px; font-weight: bold; display: inline-block; transition: background-color 0.3s, color 0.3s;"
            onmouseover="this.style.backgroundColor='#00796b'; this.style.color='#fff';"
            onmouseout="this.style.backgroundColor='#008000'; this.style.color='#fff';">
                Semua Berita →
        </a>
    </div>
        <div class="container mt-5">
        <div class="row">
            <?php if (!empty($news)): ?>
                <?php foreach ($news as $index => $item): ?>
                    <div class="col-md-6 mb-4" style="display: flex; justify-content: center;">
                        <div class="news-item" style="display: flex; align-items: stretch; border-bottom: 1px solid #ddd; padding: 15px; transition: background-color 0.3s ease; background-color: #fff; border-radius: 8px; width: 100%; max-width: 700px;">
                            <?php if (!empty($item['gambar_berita'])): ?>
                                <img src="<?= base_url('uploads/' . $item['gambar_berita']); ?>" alt="<?= $item['judul_berita']; ?>" 
                                    style="width: 190px; height: 150px; object-fit: cover; border-radius: 8px;">
                            <?php endif; ?>
                            <div class="news-text" style="flex: 1; padding-left: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                                <h5 class="news-title" style="font-size: 1.2rem; font-weight: bold; color: #333; margin-bottom: 10px;"><?= $item['judul_berita']; ?></h5>
                                <p class="news-excerpt" style="font-size: 0.95rem; color: #555; margin-bottom: 10px;"><?= substr($item['isi_berita'], 0, 100); ?>...</p>
                                <p class="news-date" style="font-size: 0.9rem; color: #777; margin-bottom: 10px;">
                                    <small><?= date('d M Y', strtotime($item['tanggal_berita'])); ?></small>
                                </p>
                                <a href="<?= site_url('c_halberita/detail/' . $item['id_berita']); ?>" 
                                class="btn btn-sm" style="background-color: #00796b; border-color: #00796b; padding: 3px 8px; color: white; text-decoration: none; font-size: 0.8rem; align-self: flex-start;">
                                Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php if ($index % 2 == 1): ?>
                        </div><div class="row">
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center" style="font-size: 1.2rem; color: #555;">Belum ada berita yang tersedia.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
    <div class="nav-container">
    <div class="info-section">
        <h2 class="info-title">Informasi Penting</h2>
        <p class="info-content">
            Selamat datang di situs kami! Temukan informasi terbaru mengenai layanan dan promosi menarik lainnya di sini. 
            Jika ada pertanyaan lebih lanjut, silakan hubungi kami melalui <a style="color: black;">kelompokhoreg@gmail.com</a>.
        </p>
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
        let currentIndex = 0;
        const totalImages = document.querySelectorAll('.carousel-item').length;
        function shiftImage(direction) {
            const images = document.querySelectorAll('.carousel-item');
            if (direction === 'next') {
                currentIndex = (currentIndex + 1) % totalImages;
            } else if (direction === 'prev') {
                currentIndex = (currentIndex - 1 + totalImages) % totalImages;
            }
            updateCarousel();
        }
        function updateCarousel() {
            const images = document.querySelectorAll('.carousel-item');
            images.forEach((img, index) => {
                img.classList.remove('active');
                if (index === currentIndex) {
                    img.classList.add('active');
                }
            });
            const indicators = document.querySelectorAll('.carousel-indicators li');
            indicators.forEach((indicator, index) => {
                indicator.classList.remove('active');
                if (index === currentIndex) {
                    indicator.classList.add('active');
                }
            });
        }
        document.addEventListener('DOMContentLoaded', () => {
            updateCarousel();
        });
        const indicators = document.querySelectorAll('.carousel-indicators li');
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => {
                currentIndex = index;
                updateCarousel();
            });
        });
    </script>
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
