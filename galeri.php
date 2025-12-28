<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<section class="container my-5 fade-up">
  <h2 class="section-title text-center mb-4">Galeri Kegiatan Desa</h2>
  <p class="text-center mb-5">
    Dokumentasi kegiatan dan aktivitas masyarakat Desa Makmur
  </p>

  <div class="row g-4">
    <div class="col-md-4 col-sm-6">
      <div class="card shadow-sm">
        <img src="assets/img/poto.jpg" class="card-img-top" alt="Kegiatan Desa">
        <div class="card-body">
          <h6 class="card-title mb-1">Gotong Royong Desa</h6>
          <p class="card-text small text-muted">
            Kegiatan gotong royong warga membersihkan lingkungan desa.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="card shadow-sm">
        <img src="assets/img/poto.jpg" class="card-img-top" alt="Kegiatan Desa">
        <div class="card-body">
          <h6 class="card-title mb-1">Musyawarah Desa</h6>
          <p class="card-text small text-muted">
            Musyawarah perencanaan pembangunan desa bersama masyarakat.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="card shadow-sm">
        <img src="assets/img/poto.jpg" class="card-img-top" alt="Kegiatan Desa">
        <div class="card-body">
          <h6 class="card-title mb-1">Penyaluran Bantuan</h6>
          <p class="card-text small text-muted">
            Penyaluran bantuan sosial kepada warga desa.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="card shadow-sm">
        <img src="assets/img/poto.jpg" class="card-img-top" alt="Kegiatan Desa">
        <div class="card-body">
          <h6 class="card-title mb-1">Kegiatan Posyandu</h6>
          <p class="card-text small text-muted">
            Pelayanan kesehatan ibu dan anak di desa.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="card shadow-sm">
        <img src="assets/img/poto.jpg" class="card-img-top" alt="Kegiatan Desa">
        <div class="card-body">
          <h6 class="card-title mb-1">Pelatihan UMKM</h6>
          <p class="card-text small text-muted">
            Pelatihan peningkatan keterampilan usaha warga desa.
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="card shadow-sm">
        <img src="assets/img/poto.jpg" class="card-img-top" alt="Kegiatan Desa">
        <div class="card-body">
          <h6 class="card-title mb-1">Perayaan Hari Besar</h6>
          <p class="card-text small text-muted">
            Perayaan hari besar nasional di lingkungan desa.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>