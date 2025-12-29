<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Perangkat Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- CSS Lokal -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- NAVBAR -->
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- HERO -->
<section class="profil-hero">
  <div class="container text-center">
    <h1 class="fw-bold">Perangkat Desa Subang</h1>
    <p class="lead">
      Struktur pemerintahan Desa Subang yang bertugas
      melayani dan mengabdi kepada masyarakat.
    </p>
  </div>
</section>

<!-- STRUKTUR PERANGKAT DESA -->
<section class="struktur-desa py-5 fade-up">
  <div class="container text-center">

    <!-- KEPALA DESA -->
    <div class="mb-5">
      <a href="detail-perangkat.php?id=kades" class="text-decoration-none">
        <div class="struktur-card utama">
          <div class="jabatan-top">KEPALA DESA</div>
          <img src="assets/img/kades.png" alt="Kepala Desa">
          <div class="nama">Irin Ismail</div>
        </div>
      </a>
    </div>

    <!-- PERANGKAT DESA -->
    <div class="row justify-content-center g-4">

      <div class="col-md-3 col-sm-6">
        <a href="detail-perangkat.php?id=sekdes" class="text-decoration-none">
          <div class="struktur-card">
            <div class="jabatan-top">SEKRETARIS DESA</div>
            <img src="assets/img/sekdes.jpg">
            <div class="nama">Siti Aminah</div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="detail-perangkat.php?id=keuangan" class="text-decoration-none">
          <div class="struktur-card">
            <div class="jabatan-top">KAUR KEUANGAN</div>
            <img src="assets/img/sekdes.jpg">
            <div class="nama">Dedi Saputra</div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a href="detail-perangkat.php?id=umum" class="text-decoration-none">
          <div class="struktur-card">
            <div class="jabatan-top">KAUR UMUM</div>
            <img src="assets/img/sekdes.jpg">
            <div class="nama">Wildan</div>
          </div>
        </a>
      </div>

    </div>

  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Subang
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Lokal -->
<script src="assets/js/script.js"></script>

</body>
</html>
