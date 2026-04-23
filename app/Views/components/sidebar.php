<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <?php $uri = uri_string(); ?>

    <li class="nav-item">
      <a class="nav-link <?= $uri === '' ? '' : 'collapsed' ?>" href="<?= base_url() ?>">
        <i class="bi bi-house-door"></i>
        <span>Home</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?= ($uri === 'keranjang' || $uri === 'transaksi') ? '' : 'collapsed' ?>" href="<?= base_url('keranjang') ?>">
        <i class="bi bi-cart3"></i>
        <span>Keranjang</span>
      </a>
    </li>

    <?php if (session()->get('role') === 'admin') : ?>
      <li class="nav-item">
        <a class="nav-link <?= strpos($uri, 'produk') === 0 ? '' : 'collapsed' ?>" href="<?= base_url('produk') ?>">
          <i class="bi bi-box-seam"></i>
          <span>Produk</span>
        </a>
      </li>
    <?php endif; ?>

  </ul>

</aside><!-- End Sidebar-->
