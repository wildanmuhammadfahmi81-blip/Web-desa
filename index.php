<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Website Resmi Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- HERO FULL WIDTH -->
<section class="hero-full">
  <img src="assets/img/desa.jpg" alt="Balai Desa Subang">

  <div class="hero-overlay">
    <h1>Website Resmi Desa Subang</h1>
    <p>Melayani masyarakat dengan transparan dan terpercaya</p>
  </div>
</section>

<section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 text-center">
      <h3 class="section-title mb-3">Profil Singkat Desa</h3>
      <p class="text-muted">
        Desa Subang merupakan desa yang menjunjung tinggi nilai gotong royong
        serta berkomitmen dalam pelayanan publik yang transparan dan akuntabel.
      </p>
    </div>
  </div>
</section>

<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Berita Terbaru Desa</h3>

  <div class="row mt-4">
    <div class="col-md-4">
      <div class="card card-berita">
        <img src="assets/img/poto.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Gotong Royong Bersih Desa</h5>
          <p class="card-text">Kegiatan rutin warga dalam menjaga kebersihan lingkungan desa.</p>
          <a href="detail-berita.php?id=3" class="btn btn-success btn-sm">
  Baca Selengkapnya
</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-berita">
        <img src="assets/img/poto.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Penyaluran BLT Desa</h5>
          <p class="card-text">Penyaluran bantuan langsung tunai kepada warga yang membutuhkan.</p>
          <a href="detail-berita.php?id=3" class="btn btn-success btn-sm">
  Baca Selengkapnya
</a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card card-berita">
        <img src="assets/img/poto.jpg" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">Musyawarah Desa</h5>
          <p class="card-text">Pembahasan rencana pembangunan desa bersama masyarakat.</p>
          <a href="detail-berita.php?id=3" class="btn btn-success btn-sm">
  Baca Selengkapnya
</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- === LAYANAN DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Layanan Desa</h3>

  <div class="row text-center mt-4">

    <div class="col-md-3 col-6 mb-4">
      <img src="assets/img/pengajuan.jpg" class="img-fluid layanan-img" alt="">
      <h6 class="mt-2 fw-semibold">Surat Keterangan</h6>
      <small class="text-muted">Pengajuan surat online</small>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <img src="assets/img/ktp.jpg" class="img-fluid layanan-img" alt="">
      <h6 class="mt-2 fw-semibold">Pembuatan KTP</h6>
      <small class="text-muted">Layanan administrasi penduduk</small>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <img src="assets/img/bansos.jpg" class="img-fluid layanan-img" alt="">
      <h6 class="mt-2 fw-semibold">Informasi Bansos</h6>
      <small class="text-muted">Data bantuan sosial desa</small>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <img src="assets/img/pengaduan.jpg" class="img-fluid layanan-img" alt="">
      <h6 class="mt-2 fw-semibold">Pengaduan Warga</h6>
      <small class="text-muted">Lapor masalah di lingkungan</small>
    </div>

  </div>
</section>

<!-- === GALERI FOTO DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Galeri Desa Subang</h3>

  <div class="row mt-4">
    <div class="col-md-4 col-6 mb-3">
      <img src="assets/img/subang.png" class="img-fluid rounded">
    </div>
    <div class="col-md-4 col-6 mb-3">
      <img src="assets/img/subang.png" class="img-fluid rounded">
    </div>
    <div class="col-md-4 col-6 mb-3">
      <img src="assets/img/subang.png" class="img-fluid rounded">
    </div>
  </div>
</section>

<!-- === POTENSI DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Potensi Desa Subang</h3>

  <div class="row text-center mt-4">
    <div class="col-md-3 col-6 mb-4">
      <img src="assets/img/cipanas.jpg" class="img-fluid rounded">
      <h6 class="mt-2 fw-semibold">Wisata Alam</h6>
      <small class="text-muted">Curug, kebun teh & bentang alam indah</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="assets/img/wajit.jpg" class="img-fluid rounded">
      <h6 class="mt-2 fw-semibold">UMKM & Ekonomi</h6>
      <small class="text-muted">wajit, gula aren, kerajinan bambu</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="assets/img/pertanian.jpg" class="img-fluid rounded">
      <h6 class="mt-2 fw-semibold">Pertanian</h6>
      <small class="text-muted">Padi, jagung, ubi & sayuran desa</small>
    </div>
    <div class="col-md-3 col-6 mb-4">
      <img src="assets/img/peternakan.jpg" class="img-fluid rounded">
      <h6 class="mt-2 fw-semibold">Peternakan</h6>
      <small class="text-muted">Domba, ayam kampung & sapi</small>
    </div>
  </div>
</section>

<!-- === UMKM DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">UMKM Desa</h3>

  <div class="row mt-4">
    <div class="col-md-3 col-6 mb-4 text-center">
      <img src="assets/img/keripik.jpg" class="img-fluid rounded mb-2">
      <h6 class="fw-semibold">Keripik kaca Pedas</h6>
      <small class="text-muted">Rp 12.000 / bungkus</small>
    </div>
    <div class="col-md-3 col-6 mb-4 text-center">
      <img src="assets/img/madu.jpeg" class="img-fluid rounded mb-2">
      <h6 class="fw-semibold">Madu Hutan</h6>
      <small class="text-muted">Rp 35.000 / botol</small>
    </div>
  </div>
</section>

<!-- === PENGUMUMAN === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Pengumuman Resmi</h3>

  <ul class="list-group mt-4">
    <li class="list-group-item">⚠️ Pembuatan KTP akan dibuka kembali tanggal 12 Januari</li>
    <li class="list-group-item">✨ Pengajuan BLT tahap 2 dibuka sampai 25 Januari</li>
    <li class="list-group-item">📌 Kerja bakti tiap hari Minggu minggu pertama</li>
  </ul>
</section>

<!-- === VIDEO PROFIL DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Video Profil Desa</h3>

  <div class="ratio ratio-16x9 mt-4">
    <iframe src="https://www.youtube.com/embed/MlWhfWX68YA?si=HUSOhmqKoY_wI2tM" title="Video Profil Desa" allowfullscreen></iframe>
  </div>
</section>

<!-- === AGENDA KEGIATAN DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Agenda Kegiatan</h3>

  <ul class="list-group list-group-flush mt-3">
    <li class="list-group-item d-flex justify-content-between">
      <span>Kerja Bakti Bersama</span> <span>10 Januari 2025</span>
    </li>
    <li class="list-group-item d-flex justify-content-between">
      <span>Rapat Musyawarah Desa</span> <span>18 Januari 2025</span>
    </li>
    <li class="list-group-item d-flex justify-content-between">
      <span>Penyuluhan Kesehatan</span> <span>25 Januari 2025</span>
    </li>
  </ul>
</section>

<!-- === APBDES (TRANSPARANSI) === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Transparansi APBDes Tahun <?= date('Y') ?></h3>
  
  <table class="table table-bordered table-striped mt-4">
    <thead class="table-success text-center">
      <tr>
        <th>No</th>
        <th>Program / Kegiatan</th>
        <th>Anggaran (Rp)</th>
        <th>Realisasi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Pembangunan Jalan Desa</td>
        <td>350.000.000</td>
        <td>80%</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Program Pemberdayaan Pemuda</td>
        <td>75.000.000</td>
        <td>100%</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bantuan Sosial Warga Tidak Mampu</td>
        <td>120.000.000</td>
        <td>95%</td>
      </tr>
    </tbody>
    <tfoot>
      <tr class="table-warning fw-bold">
        <td colspan="2" class="text-end">TOTAL ANGGARAN</td>
        <td colspan="2">Rp 545.000.000</td>
      </tr>
    </tfoot>
  </table>
</section>

<!-- === TESTIMONI WARGA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Testimoni Warga</h3>

  <div class="row mt-4">
    <div class="col-md-4 mb-3">
      <div class="card shadow-sm p-3">
        <p>"Pelayanan administrasi pengajuan surat semakin cepat, terima kasih!"</p>
        <h6 class="text-end mt-3">— Ibu Siti, RW 02</h6>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card shadow-sm p-3">
        <p>"Website ini sangat membantu untuk lihat informasi kegiatan desa."</p>
        <h6 class="text-end mt-3">— Pak Ujang, RT 04</h6>
      </div>
    </div>

    <div class="col-md-4 mb-3">
      <div class="card shadow-sm p-3">
        <p>"Saya bisa cek data bantuan online tanpa harus datang! mantap."</p>
        <h6 class="text-end mt-3">— Dede, Karang Taruna</h6>
      </div>
    </div>
  </div>
</section>

<!-- === PETA GOOGLE MAPS BALAI DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Lokasi Balai Desa Subang</h3>
  <p class="text-center text-muted">Balai Desa Subang, Kec. ... , Kab. ...</p>

  <div style="width:100%; height:350px;">
  <iframe width="100%" height="100%" style="border:0"
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d757.77378131218!2d108.53119872179647!3d-7.1281486874867985!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f6c0f778c5b53%3A0x94afd9d00fc0f704!2sKantor%20Kepala%20Desa%20Subang!5e1!3m2!1sid!2sid!4v1766890639062!5m2!1sid!2sid"
    loading="lazy" allowfullscreen>
  </iframe>
</div>
</section>

<!-- STATISTIK DESA -->
<section class="bg-success text-white py-5 fade-up">
  <div class="container text-center">

    <h3 class="section-title mb-4 text-white">Statistik Desa Subang</h3>

    <div class="row justify-content-center g-4">
      <div class="col-md-3 col-sm-6">
        <h1 class="fw-bold">3.214</h1>
        <p>Penduduk</p>
      </div>

      <div class="col-md-3 col-sm-6">
        <h1 class="fw-bold">25</h1>
        <p>RT</p>
      </div>

      <div class="col-md-3 col-sm-6">
        <h1 class="fw-bold">12</h1>
        <p>RW</p>
      </div>

      <div class="col-md-3 col-sm-6">
        <h1 class="fw-bold">5</h1>
        <p>Dusun</p>
      </div>
    </div>

  </div>
</section>

<!-- === KONTAK CEPAT === -->
<section class="container my-5 text-center fade-up">
  <h3 class="section-title">Kontak & Bantuan</h3>
  <p class="mt-3">Butuh bantuan pelayanan? Hubungi kami:</p>

  <div class="mt-4">

    <!-- WHATSAPP -->
    <a href="https://wa.me/6282119484482?text=Halo%20Saya%20ingin%20bertanya%20tentang%20pelayanan%20desa"
       target="_blank"
       class="btn btn-success mx-2">
      💬 WhatsApp Desa
    </a>

    <!-- EMAIL -->
    <a href="mailto:desasubang@gmail.com?subject=Permohonan%20Informasi&body=Halo%20Admin%2C%20saya%20ingin%20bertanya..."
       class="btn btn-primary mx-2">
      ✉️ Kirim Email
    </a>

  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
