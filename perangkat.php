<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Perangkat Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

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

<!-- KEPALA DESA -->
<section class="struktur-desa py-5 fade-up">
  <div class="container text-center">

    <h2 class="section-title mb-5">Struktur Pemerintahan Desa</h2>

    <!-- KEPALA DESA -->
    <div class="struktur-level">
      <div class="struktur-card utama">
        <img src="assets/img/kades.png">
        <h6>Bapak Ahmad Subandi</h6>
        <span>Kepala Desa</span>
      </div>
    </div>

    <!-- GARIS -->
    <div class="line-vertical"></div>

    <!-- SEKDES -->
    <div class="struktur-level">
      <div class="struktur-card">
        <img src="assets/img/sekdes.jpg">
        <h6>Ibu Siti Aminah</h6>
        <span>Sekretaris Desa</span>
      </div>
    </div>

    <!-- GARIS -->
    <div class="line-vertical"></div>

    <!-- PERANGKAT -->
    <div class="struktur-level row justify-content-center g-4">

      <div class="col-md-3">
        <div class="struktur-card">
          <img src="assets/img/sekdes.jpg">
          <h6>Bapak Dedi Saputra</h6>
          <span>Kaur Keuangan</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="struktur-card">
          <img src="assets/img/sekdes.jpg">
          <h6>Ibu Lina Marlina</h6>
          <span>Kaur Umum</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="struktur-card">
          <img src="assets/img/sekdes.jpg">
          <h6>Bapak Rudi Hartono</h6>
          <span>Kasi Pelayanan</span>
        </div>
      </div>

    </div>

  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Lokal -->
<script src="assets/js/script.js"></script>

</body>
</html>
