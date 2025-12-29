<?php
$berita = [
  1 => [
    'judul' => 'Gotong Royong Bersih Desa',
    'gambar' => 'berita.jpg',
    'tanggal' => '20 Agustus 2025',
    'penulis' => 'Admin Desa',
    'isi' => "Kegiatan gotong royong dilaksanakan pada hari Minggu pagi dengan
melibatkan seluruh warga dan perangkat desa.

Kegiatan ini bertujuan untuk menjaga kebersihan lingkungan, mempererat
silaturahmi antarwarga, serta menciptakan lingkungan desa yang sehat dan nyaman."
  ],
  2 => [
    'judul' => 'Penyaluran BLT Desa',
    'gambar' => 'berita.jpg',
    'tanggal' => '15 Agustus 2025',
    'penulis' => 'Pemerintah Desa',
    'isi' => "Penyaluran Bantuan Langsung Tunai (BLT) dilaksanakan di Balai Desa
dengan tertib dan transparan.

Bantuan ini diberikan kepada warga yang berhak sebagai bentuk kepedulian
pemerintah desa terhadap kesejahteraan masyarakat."
  ],
  3 => [
    'judul' => 'Musyawarah Desa',
    'gambar' => 'berita.jpg',
    'tanggal' => '10 Agustus 2025',
    'penulis' => 'Sekretariat Desa',
    'isi' => "Musyawarah desa membahas perencanaan pembangunan desa yang akan
dilaksanakan pada tahun mendatang.

Kegiatan ini dihadiri oleh perangkat desa, tokoh masyarakat, serta perwakilan
warga guna menyerap aspirasi masyarakat secara langsung."
  ],
  4 => [
    'judul' => 'Musyawarah karang taruna',
    'gambar' => 'berita.jpg',
    'tanggal' => '10 Agustus 2025',
    'penulis' => 'Sekretariat Desa',
    'isi' => "Musyawarah karang taruna membahas perencanaan pembangunan desa yang akan
dilaksanakan pada tahun mendatang.

Kegiatan ini dihadiri oleh perangkat desa, tokoh masyarakat, serta perwakilan
warga dari setiap rt, guna menyerap aspirasi masyarakat secara langsung."
  ],
];

$id = $_GET['id'] ?? null;

if (!$id || !isset($berita[$id])) {
  echo "<h3 style='text-align:center;margin-top:50px;'>Berita tidak ditemukan</h3>";
  exit;
}

$data = $berita[$id];
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $data['judul'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<section class="container my-5 fade-in">
  <div class="row justify-content-center">
    <div class="col-lg-10">

      <!-- Judul & Meta -->
      <div class="text-center mb-4">
        <h1 class="fw-bold d-flex justify-content-center align-items-center gap-2 title-dark">
          <img src="assets/img/logo.png" width="36" class="me-2" alt="desa"> <!-- ikon -->
          <?= $data['judul'] ?>
        </h1>

        <div class="text-muted mt-3 meta-dark">
          📅 <?= $data['tanggal'] ?> &nbsp; | &nbsp; ✍️ <?= $data['penulis'] ?>
        </div>

        <div class="divider-dark mt-3"></div>
      </div>

      <!-- Layout gambar + isi -->
      <div class="row align-items-start gy-4">
        
        <!-- Gambar sebelah kiri -->
        <div class="col-md-5">
          <img src="assets/img/<?= $data['gambar'] ?>" 
               class="img-fluid rounded shadow-sm w-100 detail-image"
               alt="<?= $data['judul'] ?>">
        </div>

        <!-- Isi berita sebelah kanan -->
        <div class="col-md-7">
          <article class="content-dark">
            <p style="text-indent:40px;">
              <?= nl2br($data['isi']) ?>
            </p>
          </article>
        </div>

      </div>

      <div class="divider-light mt-5 mb-4"></div>

      <!-- Tombol kembali -->
      <div class="text-center">
        <a href="berita.php" class="btn btn-outline-light px-4 py-2 rounded-pill back-btn">
          ← Kembali ke Daftar Berita
        </a>
      </div>

    </div>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Subang
</footer>

<!-- Wajib agar dropdown navbar hidup -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

