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

<!-- STRUKTUR PERANGKAT DESA -->
<section class="struktur-desa py-5 fade-up">
  <div class="container text-center">

    <!-- KEPALA DESA -->
    <div class="struktur-level mb-5">
      <a href="detail-perangkat.php?id=kades" class="text-decoration-none text-dark">
        <div class="struktur-card utama text-center">
          <img src="assets/img/kades.png" alt="Kepala Desa">
          <h6 class="mt-3">Bapak Ahmad Subandi</h6>
          <span>Kepala Desa</span>
        </div>
      </a>
    </div>

    <!-- PERANGKAT DESA -->
    <div class="row justify-content-center g-4">

      <!-- SEKRETARIS DESA -->
      <div class="col-md-3 col-sm-6">
        <a href="detail-perangkat.php?id=sekdes" class="text-decoration-none text-dark">
          <div class="struktur-card text-center">
            <img src="assets/img/sekdes.jpg" alt="Sekretaris Desa">
            <h6 class="mt-3">Ibu Siti Aminah</h6>
            <span>Sekretaris Desa</span>
          </div>
        </a>
      </div>

      <!-- KAUR KEUANGAN -->
      <div class="col-md-3 col-sm-6">
        <a href="detail-perangkat.php?id=keuangan" class="text-decoration-none text-dark">
          <div class="struktur-card text-center">
            <img src="assets/img/sekdes.jpg" alt="Kaur Keuangan">
            <h6 class="mt-3">Bapak Dedi Saputra</h6>
            <span>Kaur Keuangan</span>
          </div>
        </a>
      </div>

      <!-- KAUR UMUM -->
      <div class="col-md-3 col-sm-6">
        <a href="detail-perangkat.php?id=umum" class="text-decoration-none text-dark">
          <div class="struktur-card text-center">
            <img src="assets/img/sekdes.jpg" alt="Kaur Umum">
            <h6 class="mt-3">Bapak Wildan</h6>
            <span>Kaur Umum</span>
          </div>
        </a>
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
