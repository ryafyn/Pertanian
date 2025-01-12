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
            <h2 class="article-title">Pertanian Kontak</h2>
            <span class="underline"></span>
        </div>
        <div class="container my-5">
    <div class="row">
        <div class="col-12">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe
                    class="embed-responsive-item"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1003.772695163293!2d110.40099412846334!3d-7.755828999514428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59a1cd6dff27%3A0x1239c2d2ea655ddf!2sJl.%20Kemuning%20No.168%2C%20Sanggrahan%2C%20Condongcatur%2C%20Kec.%20Depok%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta%2055283!5e1!3m2!1sid!2sid!4v1734258683978!5m2!1sid!2sid"
                    width="100%" height="400" style="border: 0"
                    allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container my-5" style="max-width: 1140px;">
    <div class="row">
        <div class="col-md-4 mb-4" style="padding: 20px; background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <div class="contact-card" style="padding: 20px;">
                <p style="font-size: 16px; color: #007bff;">
                    <i class="fas fa-map-marker-alt fa-lg"></i> <strong>Alamat:</strong> Jl. Kemuning No. 168 Condongcatur, Depok Sleman, DI Yogyakarta
                </p>
                <a href="https://maps.app.goo.gl/4vGxKp8NGYj63NR77" class="d-block" style="font-weight: bold; color: #007bff;">Buka di Google Maps</a>
            </div>
        </div>
        <div class="col-md-4 mb-4" style="padding: 20px; background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <div class="contact-card" style="padding: 20px;">
                <p style="font-size: 16px; color: #28a745;">
                    <i class="fas fa-phone fa-lg"></i> <strong>Telepon:</strong> 082285512091
                </p>
                <a href="tel:+6282285512091" class="d-block" style="font-weight: bold; color: #28a745;">Hubungi via Telepon</a>
            </div>
        </div>
        <div class="col-md-4 mb-4" style="padding: 20px; background-color: #f8f9fa; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
            <div class="contact-card" style="padding: 20px;">
                <p style="font-size: 16px; color: #28a745;">
                    <i class="fab fa-whatsapp fa-lg"></i> <strong>WhatsApp:</strong> 0822 8551 2091
                </p>
                <a target="_blank" href="https://wa.me/085238762527" class="d-block" style="font-weight: bold; color: #28a745;">Hubungi via WhatsApp</a>
            </div>
        </div>
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
