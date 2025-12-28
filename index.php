<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Website Resmi Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- HERO FULL WIDTH -->
<section class="hero-full">
  <img src="assets/img/desa.jpg" alt="Balai Desa Subang">

  <div class="hero-overlay">
    <h1>Website Resmi Desa Subang</h1>
    <p>Melayani masyarakat dengan transparan dan terpercaya</p>
  </div>
</section>

<section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <h3 class="section-title mb-3">Profil Singkat Desa</h3>
      <p class="text-muted">
        Desa Subang merupakan desa yang menjunjung tinggi nilai gotong royong
        serta berkomitmen dalam pelayanan publik yang transparan dan akuntabel.
      </p>
    </div>
  </div>
</section>

<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Berita Terbaru Desa</h3>

  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card card-berita">
        <img src="assets/img/poto.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Gotong Royong Bersih Desa</h5>
          <p class="card-text">Kegiatan rutin warga dalam menjaga kebersihan lingkungan desa.</p>
          <a href="detail-berita.php?id=3" class="btn btn-success btn-sm">
  Baca Selengkapnya
</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-berita">
        <img src="assets/img/poto.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Penyaluran BLT Desa</h5>
          <p class="card-text">Penyaluran bantuan langsung tunai kepada warga yang membutuhkan.</p>
          <a href="detail-berita.php?id=3" class="btn btn-success btn-sm">
  Baca Selengkapnya
</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-berita">
        <img src="assets/img/poto.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Musyawarah Desa</h5>
          <p class="card-text">Pembahasan rencana pembangunan desa bersama masyarakat.</p>
          <a href="detail-berita.php?id=3" class="btn btn-success btn-sm">
  Baca Selengkapnya
</a>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
