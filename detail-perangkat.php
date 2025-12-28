<?php
$perangkat = [
  'kades' => [
    'nama' => 'Bapak Ahmad Subandi',
    'jabatan' => 'Kepala Desa',
    'foto' => 'kades.png',
    'deskripsi' => 'Kepala Desa Subang yang bertanggung jawab memimpin
                    penyelenggaraan pemerintahan desa serta pelayanan masyarakat.'
  ],
  'sekdes' => [
    'nama' => 'Ibu Siti Aminah',
    'jabatan' => 'Sekretaris Desa',
    'foto' => 'sekdes.jpg',
    'deskripsi' => 'Sekretaris Desa yang mengelola administrasi,
                    surat-menyurat, dan mendukung kinerja Kepala Desa.'
  ],
  'keuangan' => [
    'nama' => 'Bapak Dedi Saputra',
    'jabatan' => 'Kaur Keuangan',
    'foto' => 'sekdes.jpg',
    'deskripsi' => 'Bertanggung jawab dalam pengelolaan keuangan
                    dan administrasi anggaran desa.'
  ],
  'umum' => [
    'nama' => 'Bapak Wildan',
    'jabatan' => 'Kaur Umum',
    'foto' => 'sekdes.jpg',
    'deskripsi' => 'Bertanggung jawab dalam pengelolaan keuangan
                    dan administrasi anggaran desa.'
  ],
];

$id = $_GET['id'] ?? '';

if (!isset($perangkat[$id])) {
  echo "<h3 style='text-align:center;margin-top:50px;'>Data tidak ditemukan</h3>";
  exit;
}

$data = $perangkat[$id];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= $data['nama'] ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-6 text-center">

      <img src="assets/img/<?= $data['foto'] ?>"
           class="img-fluid rounded-4 shadow mb-4"
           style="width:200px;height:200px;object-fit:cover;">

      <h3 class="fw-bold"><?= $data['nama'] ?></h3>
      <p class="text-success fw-semibold"><?= $data['jabatan'] ?></p>

      <p class="text-muted mt-3">
        <?= nl2br($data['deskripsi']) ?>
      </p>

      <a href="perangkat.php" class="btn btn-outline-success mt-4">
        ← Kembali ke Perangkat Desa
      </a>

    </div>
  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

</body>
</html>
