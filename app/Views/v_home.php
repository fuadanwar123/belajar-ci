<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Selamat Datang</h5>
        <p>Selamat datang di aplikasi CodeIgniter dengan Template NiceAdmin!</p>
        <nav>
          <ul class="list-group">
            <li class="list-group-item"><a href="<?= base_url('produk') ?>">Daftar Produk</a></li>
            <li class="list-group-item"><a href="<?= base_url('keranjang') ?>">Keranjang Belanja</a></li>
            <li class="list-group-item"><a href="<?= base_url('transaksi') ?>">Data Transaksi</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
