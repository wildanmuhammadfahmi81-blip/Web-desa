<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Agenda Desa</title>
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
    <h1 class="fw-bold">Agenda Desa</h1>
    <p class="lead">
      Jadwal dan kegiatan Desa Subang yang akan datang.
    </p>
  </div>
</section>

<!-- AGENDA -->
<section class="py-5">
  <div class="container">
    <div class="text-center mb-4">
  <button class="btn btn-outline-success mx-1 filter-btn active" data-filter="all">
    Semua
  </button>
  <button class="btn btn-outline-success mx-1 filter-btn" data-filter="rutin">
    Rutin
  </button>
  <button class="btn btn-outline-success mx-1 filter-btn" data-filter="resmi">
    Resmi
  </button>
  <button class="btn btn-outline-success mx-1 filter-btn" data-filter="kegiatan">
    Kegiatan
  </button>
</div>
    <div class="row g-4">

      <!-- Agenda 1 -->
     <div class="col-md-4 agenda-item rutin">
  <div class="card agenda-card h-100">
    <div class="agenda-date">
      <span class="day">12</span>
      <span class="month">Agu</span>
    </div>

    <div class="card-body">
      <span class="badge bg-success mb-2">Rutin</span>
      <h5 class="fw-bold">Gotong Royong Bersama</h5>
      <p class="agenda-info">📍 Balai Desa Subang</p>
      <p class="agenda-desc">
        Kegiatan gotong royong membersihkan lingkungan desa.
      </p>
    </div>
  </div>
</div>

      <!-- Agenda 2 -->
      <div class="col-md-4 agenda-item rutin">
  <div class="card agenda-card h-100">
    <div class="agenda-date">
      <span class="day">12</span>
      <span class="month">Agu</span>
    </div>

    <div class="card-body">
      <span class="badge bg-success mb-2">Rutin</span>
      <h5 class="fw-bold">Jumsih</h5>

      <p class="agenda-info">📍 Masjid At-Taqwa</p>
      <p class="agenda-desc">
        Kegiatan gotong royong membersihkan Mesjid desa bersama
        seluruh warga dan perangkat desa.
      </p>
    </div>
  </div>
</div>

      <!-- Agenda 3 -->
      <div class="col-md-4 agenda-item resmi">
  <div class="card agenda-card h-100">
    <div class="agenda-date">
      <span class="day">12</span>
      <span class="month">Agu</span>
    </div>

    <div class="card-body">
      <span class="badge bg-success mb-2">Resmi</span>
      <h5 class="fw-bold">Agenda HUT Desa</h5>

      <p class="agenda-info">📍 Balai Desa Subang</p>
      <p class="agenda-desc">
        Kegiatan gotong royong membersihkan lingkungan desa bersama
        seluruh warga dan perangkat desa.
      </p>
    </div>
  </div>
</div>

<!-- Agenda 4 -->
      <div class="col-md-4 agenda-item resmi">
  <div class="card agenda-card h-100">
    <div class="agenda-date">
      <span class="day">25</span>
      <span class="month">jan</span>
    </div>

    <div class="card-body">
      <span class="badge bg-success mb-2">Resmi</span>
      <h5 class="fw-bold">Isra mi'raj </h5>

      <p class="agenda-info">alun-alun desa Subang</p>
      <p class="agenda-desc">
        Kegiatan gotong royong membersihkan lingkungan desa bersama
        seluruh warga dan perangkat desa.
      </p>
    </div>
  </div>
</div>

<!-- Agenda 5 -->
      <div class="col-md-4 agenda-item resmi">
  <div class="card agenda-card h-100">
    <div class="agenda-date">
      <span class="day">25</span>
      <span class="month">jan</span>
    </div>

    <div class="card-body">
      <span class="badge bg-success mb-2">Resmi</span>
      <h5 class="fw-bold">Isra mi'raj </h5>

      <p class="agenda-info">alun-alun desa Subang</p>
      <p class="agenda-desc">
        Kegiatan gotong royong membersihkan lingkungan desa bersama
        seluruh warga dan perangkat desa.
      </p>
    </div>
  </div>
</div>

<!-- Agenda 6 -->
      <div class="col-md-4 agenda-item rutin">
  <div class="card agenda-card h-100">
    <div class="agenda-date">
      <span class="day">25</span>
      <span class="month">jan</span>
    </div>

    <div class="card-body">
      <span class="badge bg-success mb-2">Resmi</span>
      <h5 class="fw-bold">Isra mi'raj </h5>

      <p class="agenda-info">alun-alun desa Subang</p>
      <p class="agenda-desc">
        Kegiatan gotong royong membersihkan lingkungan desa bersama
        seluruh warga dan perangkat desa.
      </p>
    </div>
  </div>
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
