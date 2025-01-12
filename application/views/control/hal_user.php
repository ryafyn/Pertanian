<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
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
<body style="font-family: 'Arial', sans-serif; background-color: #f9f9f9; padding: 20px;">
<div class="container">

<?php if ($this->session->flashdata('message')): ?>
    <div class="alert alert-success">
        <?php echo $this->session->flashdata('message'); ?>
    </div>
<?php endif; ?>

    <div class="text-center mb-4">
        <h2 class="my-4" style="color: #00e600;">Data Pembeli</h2>
        <h3 style="color: black;">Selamat Datang "<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Guest'; ?>"</h3>
    </div>
    <a href="<?php echo site_url('c_haluser/tambah'); ?>" class="btn btn-success mb-3" style="background-color: #008000; color: white;">Add New Data</a>
    <div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead class="table-success">
            <tr>
                <th>No.</th>
                <th>ID Pembeli</th>
                <th>Nama Pembeli</th>
                <th>Alamat Pembeli</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($pembeli)) : ?>
            <?php $no = 1; foreach ($pembeli as $row): ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $row['id_pembeli']; ?></td>
                <td><?php echo $row['nama_pembeli']; ?></td>
                <td><?php echo $row['alamat_pembeli']; ?></td>
                <td><?php echo $row['email_pembeli']; ?></td>
                <td><?php echo $row['no_hp_pembeli']; ?></td>
                <td>
                <a href="<?php echo site_url('c_haluser/edit/' . $row['id_pembeli']); ?>" class="btn btn-sm" style="background-color: #008000; color: white;">Edit</a>
                    <a href="<?php echo site_url('c_haluser/hapus/' . $row['id_pembeli']); ?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php $no++; endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="7" class="text-center">Data pembeli tidak tersedia.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
    </div>
    <div class="text-center mb-4">
        <p>Klik untuk kembali ke dashboard.</p>
        <form action="<?php echo site_url('halwelcome'); ?>" method="post">
        <button type="submit" 
                style="background-color: #008000; color: white; border: none; padding: 10px; 
                    border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease; width: 10%;"
                class="responsive-btn">
            Back
        </button>
        <style>
        @media (max-width: 767px) {
            .responsive-btn {
            width: 100% !important;
            }
        }
        </style>
            </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
</body>
</html>
