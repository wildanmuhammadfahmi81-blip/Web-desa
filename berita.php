<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Berita Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- HERO -->
<section class="profil-hero">
  <div class="container text-center">
    <h1 class="fw-bold">Berita Desa</h1>
    <p class="lead">
      berita terkini seputar kegiatan dan informasi
      di Desa Subang. 
    </p>
  </div>
</section>

<?php
$berita = [
  [
    'id' => 1,
    'judul' => 'Gotong Royong Bersih Desa',
    'gambar' => 'berita.jpg',
    'ringkas' => 'Warga bersama perangkat desa melaksanakan kerja bakti rutin.',
    'isi' => 'Kegiatan gotong royong dilaksanakan pada hari Minggu pagi...'
  ],
  [
    'id' => 2,
    'judul' => 'Penyaluran BLT Desa',
    'gambar' => 'berita.jpg',
    'ringkas' => 'Bantuan langsung tunai disalurkan kepada warga.',
    'isi' => 'Penyaluran BLT dilakukan di balai desa dengan tertib...'
  ],
  [
    'id' => 3,
    'judul' => 'Musyawarah Desa',
    'gambar' => 'berita.jpg',
    'ringkas' => 'Pembahasan pembangunan desa bersama masyarakat.',
    'isi' => 'Musyawarah desa membahas rencana kerja tahun depan...'
  ],
  [
    'id' => 4,
    'judul' => 'Musyawarah karang taruna',
    'gambar' => 'berita.jpg',
    'ringkas' => 'Pembahasan karang taruna desa bersama masyarakat.',
    'isi' => 'Musyawarah karang taruna membahas rencana kerja untuk tahun depan...'
  ],
];
?>

<div class="container my-5">

  <div class="text-center mb-4">
    <span class="text-uppercase fw-semibold" style="letter-spacing: 2px; color:#0b624a;">
      Informasi & Berita Desa
    </span>
    <h2 class="fw-bold mt-2" style="font-size: 2rem; color:#145a32;">
      Selamat Datang di Berita Desa Subang
    </h2>
  </div>

  <p class="text-center mx-auto" style="max-width: 720px; font-size: 1.08rem; line-height: 1.8; color:#444;">
    Di sini kami membagikan kabar terkini tentang kegiatan warga, pembangunan,
    dan peristiwa penting yang mewarnai kehidupan desa. Semoga setiap informasi
    dapat menjadi penghubung antara pemerintah dan masyarakat, serta menumbuhkan
    rasa <strong>kebersamaan dan kepedulian</strong>.
  </p>

  <div class="text-center mt-4">
    <span style="display:inline-block; width:80px; height:4px; background:#0b624a; border-radius:2px;"></span>
  </div>

</div>

<section class="container my-5 fade-up">
  <h2 class="text-center fw-bold mb-4">📌 Berita Desa Terkini</h2>
  <p class="text-center text-muted mb-5">
    Update informasi dan kegiatan terbaru yang berlangsung di Desa Subang
  </p>

  <div class="row g-4">
    <?php foreach($berita as $b): ?>
      <div class="col-md-4 col-sm-6">
        <div class="card border-0 shadow-sm h-100 berita-item">
          
          <!-- GAMBAR -->
          <div class="news-img-wrapper">
            <img src="assets/img/<?= $b['gambar'] ?>" class="card-img-top berita-img" alt="<?= $b['judul'] ?>">
          </div>

          <!-- ISI -->
          <div class="card-body d-flex flex-column">
            <h5 class="fw-semibold"><?= $b['judul'] ?></h5>
            <p class="text-muted small mb-3"><?= $b['ringkas'] ?></p>

            <a href="detail-berita.php?id=<?= $b['id'] ?>" 
               class="btn btn-outline-success mt-auto rounded-pill fw-semibold">
              Baca Selengkapnya →
            </a>
          </div>

        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Subang
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
