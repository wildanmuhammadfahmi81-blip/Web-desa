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

<!-- HERO -->
<section class="profil-hero">
  <div class="container text-center">
    <h1 class="fw-bold">Galeri Kegiatan Desa</h1>
    <p class="lead">
      Dokumentasi kegiatan dan aktivitas masyarakat Desa Subang.
    </p>
  </div>
</section>

<section class="container my-5 fade-up">

  <h2 class="section-title text-center mb-3 fw-bold">Galeri Kegiatan Desa</h2>

  <!-- NARASI PEMBUKA -->
  <p class="text-center mb-3">
    Dalam perjalanan membangun desa, partisipasi masyarakat menjadi kunci utama.
    Melalui dokumentasi ini kami mengajak Anda melihat kembali momen kebersamaan,
    semangat gotong royong, serta berbagai kegiatan yang memperkuat persatuan warga.
  </p>

  <!-- HIGHLIGHT / STATISTIK KEGIATAN -->
  <div class="row text-center mb-5">
    <div class="col-md-4 my-2">
      <h3 class="fw-bold text-success">25+</h3>
      <small class="text-muted">Kegiatan Tahunan</small>
    </div>
    <div class="col-md-4 my-2">
      <h3 class="fw-bold text-primary">5000+</h3>
      <small class="text-muted">Partisipan Warga</small>
    </div>
    <div class="col-md-4 my-2">
      <h3 class="fw-bold text-warning">100%</h3>
      <small class="text-muted">Semangat Gotong Royong</small>
    </div>
  </div>

   <!-- AJAKAN SEBELUM GALERI -->
  <p class="text-center mb-4 fw-semibold">
    📸 Yuk jelajahi dokumentasi kegiatan kami di bawah ini!
  </p>

  <div class="row g-4">

    <!-- Card Item -->
    <?php 
      $galeri = [
        ["gotongroyong.jpg", "Gotong Royong Desa"],
        ["musyawarah.jpg", "Musyawarah Desa"],
        ["bantuan.jpg", "Penyaluran Bantuan"],
        ["posyandu.jpg", "Kegiatan Posyandu"],
        ["umkm.jpg", "Pelatihan UMKM"],
        ["haribesar.jpg", "Perayaan Hari Besar"],
      ];
      foreach ($galeri as $idx => $g) {
    ?>
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card shadow-sm gallery-card">
        <img src="assets/img/<?= $g[0] ?>" 
             class="card-img-top gallery-img" 
             alt="<?= $g[1] ?>" 
             onclick="showPopup('assets/img/<?= $g[0] ?>', '<?= $g[1] ?>')">
        <div class="card-body text-center">
          <h6 class="card-title mb-1 fw-semibold"><?= $g[1] ?></h6>
          <button class="btn btn-primary btn-sm mt-2"
                  onclick="showPopup('assets/img/<?= $g[0] ?>', '<?= $g[1] ?>')">
            📸 Lihat Foto
          </button>
        </div>
      </div>
    </div>
    <?php } ?>
    <!-- End Card Item -->

  </div>
</section>

<!-- === Popup Modal === -->
<div class="modal fade" id="fotoModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header border-0">
        <h5 class="modal-title fw-bold" id="modalTitle"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <img id="modalImage" class="img-fluid rounded shadow-sm">
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap JS (WAJIB agar modal bisa jalan) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Script Popup -->
<script>
  function showPopup(imgSrc, title){
    document.getElementById("modalImage").src = imgSrc;
    document.getElementById("modalTitle").innerText = title;
    var modal = new bootstrap.Modal(document.getElementById('fotoModal'));
    modal.show();
  }
</script>

</div>
</section>
<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Subang
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>