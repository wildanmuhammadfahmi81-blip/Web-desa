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

<footer class="bg-dark text-white mt-5">
  <div class="container py-5">
    <div class="row g-4">

      <!-- INFO DESA -->
      <div class="col-md-4">
        <h5 class="fw-bold">Desa Makmur</h5>
        <p class="small">
          Website resmi Pemerintah Desa Makmur sebagai sarana informasi
          dan pelayanan masyarakat.
        </p>
        <p class="small mb-1">📍 Jl. Raya Desa Makmur</p>
        <p class="small mb-1">📧 desamakmur@email.com</p>
        <p class="small">📞 08xxxxxxxxxx</p>
      </div>

      <!-- FORM KONTAK -->
      <div class="col-md-8">
        <h5 class="fw-bold mb-3">Form Kontak / Aspirasi Warga</h5>

        <form action="#" method="post">
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="col-12">
              <textarea name="pesan" rows="3" class="form-control" placeholder="Tulis pesan atau aspirasi..." required></textarea>
            </div>
            <div class="col-12 text-end">
              <button type="submit" class="btn btn-success">
                Kirim Pesan
              </button>
            </div>
          </div>
        </form>
      </div>

    </div>

    <hr class="border-secondary mt-4">

    <p class="text-center small mb-0">
      © <?= date('Y') ?> Pemerintah Desa Makmur
    </p>
  </div>
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>