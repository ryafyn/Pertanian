<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Registrasi Pembeli</title>
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
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
      .container-fluid {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .right-side {
        background-color: #00e600;
        padding: 80px 40px;
        text-align: left;
        min-height: 500px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
      }

      .right-side h3,
      .right-side p {
        margin-bottom: 20px;
      }

      .form-label {
        margin-bottom: 1px;
      }

      .form-control {
        margin-bottom: 1px;
        padding: 10px;
        font-size: 14px;
        border-radius: 5px;
        border: 1px solid #ccc;
      }

      @media (min-width: 992px) {
        .col-lg-6.d-none.d-lg-block {
          padding-top: 50px; 
        }

        .right-side {
          padding-top: 30px; 
        }
      }
    </style>
  </head>
  <body style="background-color: #f4f4f4; font-family: Arial, sans-serif">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block text-center" style="padding: 20px;">
          <h2 style="font-family: 'inria serif'">DASHBOARD</h2>
          <h3 style="font-family: 'inria serif'">REGISTRASI PEMBELI</h3>
          <p style="font-family: 'inria serif'">"Sukses dibidang manapun"</p>
        </div>
        <div class="col-12 col-lg-6 right-side">
          <h3 style="font-family: 'inria serif'">SELAMAT DATANG</h3>
          <p style="font-family: 'inria serif'">Silahkan Registrasi</p>
          <form action="<?php echo site_url('c_userlogin/register_action'); ?>" method="post" style="display: flex; flex-direction: column; gap: 15px;">
            <div class="mb-3">
              <label for="namaPembeli" class="form-label">Nama Pembeli</label>
              <input type="text" name="namaPembeli" id="namaPembeli" class="form-control" placeholder="Nama Pembeli" required>
            </div>
            <div class="mb-3">
              <label for="alamatPembeli" class="form-label">Alamat Pembeli</label>
              <textarea name="alamatPembeli" id="alamatPembeli" class="form-control" placeholder="Alamat Pembeli" required></textarea>
            </div>
            <div class="mb-3">
              <label for="emailPembeli" class="form-label">Email Pembeli</label>
              <input type="email" name="emailPembeli" id="emailPembeli" class="form-control" placeholder="Email Pembeli" required>
            </div>
            <div class="mb-3">
              <label for="noHpPembeli" class="form-label">Nomor HP Pembeli</label>
              <input type="tel" name="noHpPembeli" id="noHpPembeli" class="form-control" placeholder="Nomor HP Pembeli" required>
            </div>
            <button type="submit" 
                    style="width: 100%; background-color: #008000; color: white; border: none; padding: 10px; 
                           border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
              Registrasi
            </button>
          </form>
          <div class="footer" style="margin-top: 20px; text-align: center; font-family: 'inter'; font-size: 14px;">
            <p>@kelompokhoreg | 2024</p>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      feather.replace();
    </script>
  </body>
</html>
