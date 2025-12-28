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

<section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">

      <!-- Judul -->
      <h1 class="fw-bold mb-2"><?= $data['judul'] ?></h1>

      <!-- Meta Info -->
      <div class="text-muted mb-4" style="font-size: 0.9rem;">
        <span>📅 <?= $data['tanggal'] ?></span> |
        <span>✍️ <?= $data['penulis'] ?></span>
      </div>

      <!-- Gambar -->
      <img src="assets/img/<?= $data['gambar'] ?>" 
           class="img-fluid rounded shadow-sm mb-4 w-100"
           alt="<?= $data['judul'] ?>">

      <!-- Isi Berita -->
      <div class="content-berita text-dark" style="line-height: 1.9; font-size: 1.05rem;">
        <?= nl2br($data['isi']) ?>
      </div>

      <!-- Tombol Kembali -->
      <a href="berita.php" class="btn btn-outline-success mt-5">
        ← Kembali ke Daftar Berita
      </a>

    </div>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

</body>
</html>
