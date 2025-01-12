<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Registrasi Petani</title>
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
      .right-side {
        background-color: #00e600;
        padding: 50px 20px;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
    </style>
  </head>
  <body style="background-color: #f4f4f4; font-family: Arial, sans-serif">
    <div class="container-fluid d-flex flex-column justify-content-center" style="height: 100vh">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-block text-center" style="padding: 20px;">
          <h2 style="font-family: 'inria serif'">DASHBOARD USER</h2>
          <p style="font-family: 'inria serif'">"Sukses dibidang manapun"</p>
        </div>
        <div class="col-12 col-lg-6 right-side " style="background-color: #00e600; padding: 50px 100px;">
          <h3 style="font-family: 'inria serif'">SELAMAT DATANG</h3>
          <p style="font-family: 'inria serif'">Silahkan Login</p>
          <form action="<?php echo site_url('c_userlogin/login_action'); ?>" method="post" style="display: flex; flex-direction: column; gap: 15px;">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <button type="submit" 
                    style="width: 100%; background-color: #008000; color: white; border: none; padding: 10px; 
                           border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
              Login
            </button>
            <a href="<?php echo site_url('c_userlogin/registration'); ?>" 
               style="width: 100%; background-color: #008000; color: white; border: none; padding: 10px;
                      border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease; text-align: center; display: block; text-decoration: none;">
              Registrasi
            </a>
          </form>
          <div class="footer" style="margin-top: 20px; text-align: center; font-family: 'inter'; font-size: 14px;">
            <p>@kelompok HOREG | 2024</p>
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
