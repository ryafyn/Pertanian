<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    />
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer"
    />
</head>
<body style="font-family: 'Arial', sans-serif;">
<div style="height: 100vh; display: flex;">
    <div class="left-side" style="width: 50%; padding: 30px; text-align: center; background-color: #00e600; color: black;">
        <h2 style="margin-bottom: 15px; font-family: 'Roboto', sans-serif;">DASHBOARD</h2>
        <p style="margin-bottom: 1px; font-family: 'Roboto', sans-serif;">Selamat Datang di Control Panel</p>
        <p>Anda dapat mengakses halaman berikut:</p>
        <div style="display: flex; flex-wrap: wrap; justify-content: space-between; gap: 20px;">
            <a href="c_halproduk" style="color: white; flex: 1 1 48%; text-align: center; padding: 2px; background-color: #00e600; border-radius: 5px; transition: background-color 0.3s, transform 0.3s; text-decoration: none;">
                <i class="fa fa-cart-arrow-down"></i> Halaman Produk
            </a>
            <a href="c_halberita" style="color: white; flex: 1 1 48%; text-align: center; padding: 2px; background-color: #00e600; border-radius: 5px; transition: background-color 0.3s, transform 0.3s; text-decoration: none;">
                <i class="fa fa-globe"></i> Halaman Berita
            </a>
            <a href="c_haladmin" style="color: white; flex: 1 1 48%; text-align: center; padding: 2px; background-color: #00e600; border-radius: 5px; transition: background-color 0.3s, transform 0.3s; text-decoration: none;">
                <i class="fa fa-address-book"></i> Halaman Admin
            </a>
            <a href="c_haluser" style="color: white; flex: 1 1 48%; text-align: center; padding: 2px; background-color: #00e600; border-radius: 5px; transition: background-color 0.3s, transform 0.3s; text-decoration: none;">
                <i class="fa fa-users"></i> Halaman User
            </a>
            <a href="c_transaksi" style="color: white; flex: 1 1 48%; text-align: center; padding: 2px; background-color: #00e600; border-radius: 5px; transition: background-color 0.3s, transform 0.3s; text-decoration: none;">
                <i class="fa fa-exchange"></i> Halaman Transaksi
            </a>
        </div>
    </div>
    <div class="right-side" style="width: 50%; padding: 30px; text-align: center; background-color: white;">
        <?php if(isset($_SESSION['username'])) { ?>
            <h3 style="color: #00e600;">Selamat Datang "<?php echo $_SESSION['username']; ?>"</h3>
            <p>Klik untuk logout.</p>
            <form action="<?php echo site_url('logout'); ?>" method="post">
    <button type="submit" 
            style="width: 50%; background-color: #008000; color:white ; border: none; padding: 10px; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
        Logout
    </button>
</form>

        <?php } else { ?>
            <h3>Maaf...</h3>
            <p>Anda tidak berhak mengakses halaman ini. Silahkan <a href="login.php" style="color: #17a2b8;">Login</a> terlebih dahulu.</p>
        <?php } ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
</body>
</html>

