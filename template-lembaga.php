<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $judul ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<section class="profil-hero">
  <div class="container text-center">
    <h1 class="fw-bold"><?= $judul ?></h1>
    <p class="lead"><?= $subjudul ?></p>
  </div>
</section>

<section class="py-5 fade-up">
  <div class="container">
    <div class="card shadow-sm p-4">
      <?= $konten ?>
    </div>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Subang
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
