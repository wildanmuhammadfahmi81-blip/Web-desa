<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Desa subang</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- HERO FULL WIDTH -->
<section class="hero-full">
  <img src="assets/img/kantordesa.jpg" alt="Balai Desa Subang">

  <div class="hero-overlay">
    <h1>Website Resmi Desa Subang</h1>
    <p>Melayani masyarakat dengan transparan dan terpercaya</p>
  </div>
</section>

<section class="container my-5 fade-up">
  <div class="row justify-content-center">
    <div class="col-lg-9">

      <div class="profil-desa-card">
        <h3 class="section-title text-center mb-3">
          Profil Singkat Desa Subang
        </h3>

        <p class="text-center text-muted mb-4">
          Desa Subang merupakan desa yang menjunjung tinggi nilai gotong royong,
          kearifan lokal, serta berkomitmen dalam pelayanan publik yang transparan,
          partisipatif, dan akuntabel.
        </p>

        <div class="row text-center">
          <div class="col-md-4 mb-3">
            <div class="profil-item">
              <i class="bi bi-people-fill"></i>
              <h6>Gotong Royong</h6>
              <small>Budaya kebersamaan dan solidaritas warga</small>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="profil-item">
              <i class="bi bi-shield-check"></i>
              <h6>Transparan</h6>
              <small>Pengelolaan pemerintahan yang terbuka</small>
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <div class="profil-item">
              <i class="bi bi-building"></i>
              <h6>Pelayanan Publik</h6>
              <small>Layanan desa cepat dan mudah</small>
            </div>
          </div>
        </div>

      </div>

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

  <div class="row g-4 mt-4">

    <div class="col-md-3 col-sm-6">
      <a href="#" class="layanan-link">
        <div class="layanan-card">
          <div class="layanan-icon">
            <img src="assets/img/pengajuan.jpg" alt="Surat Keterangan">
          </div>
          <h6>Surat Keterangan</h6>
          <p>Pengajuan surat secara online</p>
        </div>
      </a>
    </div>

    <div class="col-md-3 col-sm-6">
      <a href="#" class="layanan-link">
        <div class="layanan-card">
          <div class="layanan-icon">
            <img src="assets/img/ktp.jpg" alt="Pembuatan KTP">
          </div>
          <h6>Pembuatan KTP</h6>
          <p>Layanan administrasi kependudukan</p>
        </div>
      </a>
    </div>

    <div class="col-md-3 col-sm-6">
      <a href="#" class="layanan-link">
        <div class="layanan-card">
          <div class="layanan-icon">
            <img src="assets/img/bansos.jpg" alt="Bansos">
          </div>
          <h6>Informasi Bansos</h6>
          <p>Data dan status bantuan sosial</p>
        </div>
      </a>
    </div>

    <div class="col-md-3 col-sm-6">
      <a href="#" class="layanan-link">
        <div class="layanan-card">
          <div class="layanan-icon">
            <img src="assets/img/pengaduan.jpg" alt="Pengaduan">
          </div>
          <h6>Pengaduan Warga</h6>
          <p>Laporan dan aspirasi masyarakat</p>
        </div>
      </a>
    </div>

  </div>
</section>

<!-- === GALERI FOTO DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Galeri Desa Subang</h3>

  <div class="row g-4 mt-4">

    <div class="col-md-4 col-sm-6">
      <div class="galeri-card">
        <img src="assets/img/subang.png" alt="Kegiatan Desa">
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="galeri-card">
        <img src="assets/img/subang.png" alt="Kegiatan Desa">
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="galeri-card">
        <img src="assets/img/subang.png" alt="Kegiatan Desa">
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="galeri-card">
        <img src="assets/img/subang.png" alt="Kegiatan Desa">
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="galeri-card">
        <img src="assets/img/subang.png" alt="Kegiatan Desa">
      </div>
    </div>

    <div class="col-md-4 col-sm-6">
      <div class="galeri-card">
        <img src="assets/img/subang.png" alt="Kegiatan Desa">
      </div>
    </div>

  </div>
</section>

<!-- === POTENSI DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Potensi Desa Subang</h3>

  <div class="row g-4 mt-4">

    <div class="col-md-3 col-sm-6">
      <div class="potensi-card">
        <div class="potensi-img">
          <img src="assets/img/cipanas.jpg" alt="Wisata Alam">
        </div>
        <h6>Wisata Alam</h6>
        <p>Curug, kebun teh, dan bentang alam indah</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="potensi-card">
        <div class="potensi-img">
          <img src="assets/img/wajit.jpg" alt="UMKM">
        </div>
        <h6>UMKM & Ekonomi</h6>
        <p>Wajit, gula aren, dan kerajinan bambu</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="potensi-card">
        <div class="potensi-img">
          <img src="assets/img/pertanian.jpg" alt="Pertanian">
        </div>
        <h6>Pertanian</h6>
        <p>Padi, jagung, ubi, dan sayuran desa</p>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="potensi-card">
        <div class="potensi-img">
          <img src="assets/img/peternakan.jpg" alt="Peternakan">
        </div>
        <h6>Peternakan</h6>
        <p>Domba, ayam kampung, dan sapi</p>
      </div>
    </div>

  </div>
</section>

<!-- === UMKM DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">UMKM DESA</h3>

  <div class="row g-4 mt-4">

    <div class="col-md-3 col-sm-6">
      <div class="umkm-card">
        <div class="umkm-img">
          <img src="assets/img/keripik.jpg" alt="Keripik Kaca">
        </div>
        <h6>Keripik Kaca Pedas</h6>
        <span>Rp 12.000 / bungkus</span>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="umkm-card">
        <div class="umkm-img">
          <img src="assets/img/madu.jpeg" alt="Madu Hutan">
        </div>
        <h6>Madu Hutan</h6>
        <span>Rp 35.000 / botol</span>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="umkm-card">
        <div class="umkm-img">
          <img src="assets/img/kripik.jpg" alt="Keripik Pisang">
        </div>
        <h6>Keripik Pisang</h6>
        <span>Rp 25.000 / kg</span>
      </div>
    </div>

    <div class="col-md-3 col-sm-6">
      <div class="umkm-card">
        <div class="umkm-img">
          <img src="assets/img/peyeum.jpg" alt="Peyeum">
        </div>
        <h6>Peyeum Tape</h6>
        <span>Rp 55.000 / ember</span>
      </div>
    </div>

  </div>
</section>

<!-- === PENGUMUMAN RESMI === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Pengumuman Resmi Desa</h3>

  <div class="row g-4 mt-4">

    <!-- Pengumuman 1 -->
    <div class="col-md-4">
      <div class="pengumuman-card penting">
        <div class="pengumuman-header">
          <span class="badge">PENTING</span>
          <small>10 Jan 2025</small>
        </div>
        <h6>Pembuatan KTP Dibuka Kembali</h6>
        <p>
          Pelayanan pembuatan KTP akan dibuka kembali mulai
          tanggal 12 Januari 2025 di Kantor Desa.
        </p>
      </div>
    </div>

    <!-- Pengumuman 2 -->
    <div class="col-md-4">
      <div class="pengumuman-card info">
        <div class="pengumuman-header">
          <span class="badge">INFORMASI</span>
          <small>08 Jan 2025</small>
        </div>
        <h6>Pendaftaran BLT Tahap II</h6>
        <p>
          Pengajuan Bantuan Langsung Tunai (BLT) tahap II
          dibuka hingga 25 Januari 2025.
        </p>
      </div>
    </div>

    <!-- Pengumuman 3 -->
    <div class="col-md-4">
      <div class="pengumuman-card rutin">
        <div class="pengumuman-header">
          <span class="badge">RUTIN</span>
          <small>05 Jan 2025</small>
        </div>
        <h6>Kerja Bakti Mingguan</h6>
        <p>
          Kegiatan kerja bakti dilaksanakan setiap hari Minggu
          pada minggu pertama setiap bulan.
        </p>
      </div>
    </div>

    <!-- Pengumuman 4 -->
    <div class="col-md-4">
      <div class="pengumuman-card info">
        <div class="pengumuman-header">
          <span class="badge">INFO</span>
          <small>25 Jan 2025</small>
        </div>
        <h6>Pembagian sembako</h6>
        <p>
          Pembagian bantuan sembako bagi warga kurang mampu
      dilaksanakan pada 17 Januari 2025 di Balai Desa.
        </p>
      </div>
    </div>

    <!-- Pengumuman 5 -->
    <div class="col-md-4">
      <div class="pengumuman-card info">
        <div class="pengumuman-header">
          <span class="badge">INFORMASI</span>
          <small>08 Jan 2025</small>
        </div>
        <h6>Perbuhan jam layanan desa</h6>
        <p>
          Jam pelayanan Kantor Desa berubah menjadi
      pukul 08.00 – 14.00 WIB selama bulan Januari.
        </p>
      </div>
    </div>

    <!-- Pengumuman 6 -->
    <div class="col-md-4">
      <div class="pengumuman-card rutin">
        <div class="pengumuman-header">
          <span class="badge">RUTIN</span>
          <small>01 Jan 2025</small>
        </div>
        <h6>Posyandu Balita</h6>
        <p>
          Kegiatan Posyandu Balita dilaksanakan setiap
      tanggal 10 di Posyandu masing-masing dusun.
        </p>
      </div>
    </div>

  </div>
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
<section class="apbdes-section py-5 fade-up">
  <div class="container">

    <h3 class="section-title text-center mb-2">
      Transparansi APBDes Tahun <?= date('Y') ?>
    </h3>
    <p class="text-center text-muted mb-5">
      Informasi penggunaan Anggaran Pendapatan dan Belanja Desa
    </p>

    <!-- RINGKASAN -->
    <div class="row g-4 mb-5">
      <div class="col-md-4">
        <div class="apbdes-summary bg-success text-white">
          <h6>Total Anggaran</h6>
          <h3>Rp 545.000.000</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="apbdes-summary bg-primary text-white">
          <h6>Total Program</h6>
          <h3>3 Program</h3>
        </div>
      </div>
      <div class="col-md-4">
        <div class="apbdes-summary bg-warning text-dark">
          <h6>Rata-rata Realisasi</h6>
          <h3>92%</h3>
        </div>
      </div>
    </div>
    <div class="col-md-4">
        <div class="apbdes-summary bg-warning text-dark">
          <h6>Tidak Realisasi</h6>
          <h3>50%</h3>
        </div>
      </div>
    </div>

    <!-- TABEL -->
    <div class="table-responsive shadow-sm rounded">
      <table class="table apbdes-table mb-0">
        <thead>
          <tr>
            <th>No</th>
            <th>Program / Kegiatan</th>
            <th>Anggaran</th>
            <th>Realisasi</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>1</td>
            <td>Pembangunan Jalan Desa</td>
            <td>Rp 350.000.000</td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-success" style="width:80%">80%</div>
              </div>
            </td>
          </tr>

          <tr>
            <td>2</td>
            <td>Program Pemberdayaan Pemuda</td>
            <td>Rp 75.000.000</td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-primary" style="width:100%">100%</div>
              </div>
            </td>
          </tr>

          <tr>
            <td>3</td>
            <td>Bantuan Sosial Warga Tidak Mampu</td>
            <td>Rp 120.000.000</td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning text-dark" style="width:95%">95%</div>
              </div>
            </td>
          </tr>

          <tr>
            <td>4</td>
            <td>Yang tidak Teralisasi</td>
            <td>Rp 1.120.000.000</td>
            <td>
              <div class="progress">
                <div class="progress-bar bg-warning text-dark" style="width:115%">115%</div>
              </div>
            </td>
          </tr>

        </tbody>

        <tfoot>
          <tr>
            <th colspan="2" class="text-end">TOTAL ANGGARAN</th>
            <th colspan="2">Rp 2.545.000.000</th>
          </tr>
        </tfoot>
      </table>
    </div>

  </div>
</section>

<!-- === TESTIMONI WARGA === -->
<section class="testimoni-section py-5 fade-up">
  <div class="container">

    <h3 class="section-title text-center mb-2">Testimoni Warga</h3>
    <p class="text-center text-muted mb-5">
      Pendapat dan pengalaman warga terhadap pelayanan Desa Subang
    </p>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="testimoni-card">
          <div class="quote">“</div>
          <p class="testimoni-text">
            Pelayanan administrasi pengajuan surat semakin cepat,
            petugasnya ramah dan informatif.
          </p>
          <div class="testimoni-user">
            <img src="assets/img/ikon.png">
            <div>
              <strong>Ibu Siti</strong>
              <span>RW 02</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testimoni-card">
          <div class="quote">“</div>
          <p class="testimoni-text">
            Website desa sangat membantu untuk melihat informasi
            kegiatan dan pengumuman terbaru.
          </p>
          <div class="testimoni-user">
            <img src="assets/img/ikon.png">
            <div>
              <strong>Pak Ujang</strong>
              <span>RT 04</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="testimoni-card">
          <div class="quote">“</div>
          <p class="testimoni-text">
            Sekarang bisa cek informasi bantuan secara online,
            jadi lebih praktis dan transparan.
          </p>
          <div class="testimoni-user">
            <img src="assets/img/ikon.png">
            <div>
              <strong>Dede</strong>
              <span>Karang Taruna</span>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- === PETA GOOGLE MAPS BALAI DESA === -->
<section class="container my-5 fade-up">
  <h3 class="section-title text-center">Lokasi Balai Desa Subang</h3>
  <p class="text-center text-muted">Desa Subang, Kec. Subang, Kab. Kuningan</p>

  <div style="width:100%; height:350px;">
  <iframe width="100%" height="100%" style="border:0"
    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d757.77378131218!2d108.53119872179647!3d-7.1281486874867985!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f6c0f778c5b53%3A0x94afd9d00fc0f704!2sKantor%20Kepala%20Desa%20Subang!5e1!3m2!1sid!2sid!4v1766890639062!5m2!1sid!2sid"
    loading="lazy" allowfullscreen>
  </iframe>
</div>
</section>

<!-- STATISTIK DESA -->
<section class="statistik-desa py-5 fade-up">
  <div class="container text-center">

    <h3 class="section-title mb-2">Statistik Desa Subang</h3>
    <p class="text-muted mb-5">
      Gambaran umum kondisi kependudukan dan wilayah Desa Subang
    </p>

    <div class="row g-4 justify-content-center">

      <div class="col-md-3 col-sm-6">
        <div class="stat-card">
          <div class="stat-icon">👥</div>
          <h2 class="stat-number" data-target="3214">1530</h2>
          <p>Penduduk</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="stat-card">
          <div class="stat-icon">🏠</div>
          <h2 class="stat-number" data-target="25">25</h2>
          <p>RT</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="stat-card">
          <div class="stat-icon">🏘️</div>
          <h2 class="stat-number" data-target="12">14</h2>
          <p>RW</p>
        </div>
      </div>

      <div class="col-md-3 col-sm-6">
        <div class="stat-card">
          <div class="stat-icon">🌿</div>
          <h2 class="stat-number" data-target="5">9</h2>
          <p>Dusun</p>
        </div>
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
  © <?= date('Y') ?> Pemerintah Desa Subang
</footer>
</body>
</html>

</body>
</html>
