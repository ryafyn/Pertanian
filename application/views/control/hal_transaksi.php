<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Transaksi</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    />
</head>
<body style="font-family: Arial, sans-serif; background-color: #f9f9f9; padding: 20px;">
    <div class="container">
        <h2 class="text-center mb-4">Kelola Transaksi</h2>
        
        <!-- Flash Messages -->
        <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('success'); ?>
            </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?= $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>ID Pembeli</th>
                    <th>ID Produk</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($transaksi as $row) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($row['id_transaksi']) ?></td>
                    <td><?= htmlspecialchars($row['id_pembeli']) ?></td>
                    <td><?= htmlspecialchars($row['id_produk']) ?></td>
                    <td><?= htmlspecialchars($row['tanggal_transaksi']) ?></td>
                    <td><?= htmlspecialchars($row['jumlah_produk']) ?></td>
                    <td>Rp <?= number_format($row['total_harga'], 0, ',', '.') ?></td>
                    <td>
                        <!-- Status Badge -->
                        <?php if ($row['status_transaksi'] == 'Completed') { ?>
                            <span class="badge bg-success"><?= $row['status_transaksi'] ?></span>
                        <?php } elseif ($row['status_transaksi'] == 'Pending') { ?>
                            <span class="badge bg-warning text-dark"><?= $row['status_transaksi'] ?></span>
                        <?php } elseif ($row['status_transaksi'] == 'Cancelled') { ?>
                            <span class="badge bg-danger"><?= $row['status_transaksi'] ?></span>
                        <?php } else { ?>
                            <span class="badge bg-info text-dark"><?= $row['status_transaksi'] ?></span>
                        <?php } ?>
                    </td>
                    <td>
                        <!-- Button to change status to Pending -->
                        <a href="<?= site_url('c_transaksi/update_status/' . $row['id_transaksi'] . '/Pending') ?>" 
                           class="btn btn-info btn-sm"
                           onclick="return confirm('Apakah Anda yakin ingin mengubah status menjadi Pending?')">Dalam Pengiriman</a>
                        
                        <!-- Button to change status to Completed -->
                        <a href="<?= site_url('c_transaksi/update_status/' . $row['id_transaksi'] . '/Completed') ?>" 
                           class="btn btn-success btn-sm"
                           onclick="return confirm('Apakah barang sudah sampai dan ingin diubah menjadi Selesai?')">Selesai</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
            crossorigin="anonymous"></script>
</body>
</html>
