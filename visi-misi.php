<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Visi & Misi Desa</title>
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

<section class="profil-hero">
  <div class="container text-center">
    <h1 class="fw-bold">Visi & Misi Desa Subang</h1>
    <p class="lead">
      Arah, tujuan, dan komitmen pembangunan Desa Subang
      demi kesejahteraan masyarakat.
    </p>
  </div>
</section>

<!-- KONTEN -->
<section class="container profil-content fade-up">
  <div class="row g-5">

    <!-- VISI -->
    <div class="col-md-6">
      <div class="profil-card h-100">
        <h4 class="mb-3">🎯 Visi Desa</h4>
        <p>
          Terwujudnya Desa Subang yang
          <strong>maju, mandiri, religius, dan sejahtera</strong>
          melalui pembangunan berkelanjutan serta pelayanan
          masyarakat yang transparan, adil, dan berkualitas.
        </p>
      </div>
    </div>

    <!-- MISI -->
    <div class="col-md-6">
      <div class="profil-card h-100">
        <h4 class="mb-3">🚀 Misi Desa</h4>
        <ul class="profil-list">
          <li>Meningkatkan kualitas pelayanan publik yang cepat dan transparan</li>
          <li>Mendorong pembangunan infrastruktur desa yang merata</li>
          <li>Mengembangkan perekonomian berbasis potensi lokal</li>
          <li>Mewujudkan tata kelola pemerintahan yang bersih dan akuntabel</li>
          <li>Menumbuhkan nilai keagamaan dan budaya gotong royong</li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- === DATA SINGKAT (DIAGRAM BATANG) === -->
<section class="container my-5 fade-up">
  <h3 class="text-center mb-4">Data Singkat Desa Subang</h3>

  <canvas id="dataDesaChart"></canvas>
</section>

<!-- CDN Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('dataDesaChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Dusun', 'RT', 'Penduduk', 'KK'],
      datasets: [{
        label: 'Jumlah',
        data: [50, 74, 8324, 1112],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Subang
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Lokal -->
<script src="assets/js/script.js"></script>

</body>
</html>
