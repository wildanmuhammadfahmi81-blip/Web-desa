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
];
?>

<section class="container my-5 fade-up">
  <h2 class="section-title text-center mb-4">Berita Desa</h2>

  <div class="row">
    <?php foreach($berita as $b): ?>
    <div class="col-md-4 mb-4">
      <div class="card card-berita h-100">
        <img src="assets/img/<?= $b['gambar'] ?>" class="card-img-top" alt="<?= $b['judul'] ?>">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title"><?= $b['judul'] ?></h5>
          <p class="card-text text-muted"><?= $b['ringkas'] ?></p>
          <a href="detail-berita.php?id=<?= $b['id'] ?>" 
   class="btn btn-success btn-sm mt-auto">
   Baca Selengkapnya
</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
