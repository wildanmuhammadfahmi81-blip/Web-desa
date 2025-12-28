<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<section class="profil-hero">
  <div class="container text-center">
    <h1 class="fw-bold">Profil Desa Subang</h1>
    <p class="lead">
      Desa yang menjunjung tinggi kebersamaan, kearifan lokal,
      dan pembangunan berkelanjutan.
    </p>
  </div>
</section>

<section class="container text-center">
  <h1 class="fw-bold">Profil Desa Subang</h1>
  <p class="lead">
    Gambaran umum mengenai sejarah, kondisi, dan potensi
    Desa Subang sebagai desa yang terus berkembang.
    </p>
  </div>
</section>

<section class="container profil-content fade-up">
  <div class="row align-items-center g-5">

    <!-- TEKS -->
    <div class="col-md-6">
      <div class="profil-card">

        <h4>🏘️ Gambaran Umum</h4>
        <p>
          Desa Subang merupakan salah satu desa yang berada di wilayah
          Kabupaten Subang. Desa ini dikenal dengan kehidupan
          masyarakat yang rukun, aktif dalam kegiatan sosial,
          serta menjunjung tinggi nilai gotong royong.
        </p>

        <h4>📜 Sejarah Singkat</h4>
        <p>
          Desa Subang berdiri sejak tahun 1945 dan terus mengalami
          perkembangan baik dari segi pemerintahan, infrastruktur,
          maupun kesejahteraan masyarakat.
        </p>

        <h4>🗺️ Letak Geografis</h4>
        <p>
          Desa Subang memiliki wilayah yang strategis dengan
          batas desa yang jelas, serta didukung oleh akses jalan
          yang menghubungkan desa dengan pusat kecamatan.
        </p>

        <h4>🌾 Potensi Desa</h4>
        <ul>
          <li>Pertanian dan perkebunan</li>
          <li>Usaha Mikro Kecil dan Menengah (UMKM)</li>
          <li>Kegiatan sosial dan budaya masyarakat</li>
        </ul>

      </div>
    </div>

    <!-- GAMBAR -->
    <div class="col-md-6 text-center">
      <img src="assets/img/desa.jpg"
           class="img-fluid rounded-4 shadow-lg profil-img"
           alt="Desa Subang">
    </div>

  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
