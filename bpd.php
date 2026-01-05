<?php
$judul = "Badan Permusyawaratan Desa (BPD)";
$subjudul = "Lembaga perwakilan masyarakat dan mitra pemerintahan desa";

$konten = <<<HTML

<div class="bpd-desa">

  <!-- PENJELASAN UMUM -->
  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <h5 class="fw-semibold mb-3">🏛️ Tentang BPD</h5>
      <p>
        Berdasarkan <strong>Undang-Undang Nomor 6 Tahun 2014 tentang Desa</strong>,
        Badan Permusyawaratan Desa (BPD) adalah lembaga yang melaksanakan
        fungsi pemerintahan desa, yang anggotanya merupakan wakil dari
        penduduk desa berdasarkan keterwakilan wilayah dan ditetapkan
        secara demokratis.
      </p>
      <p class="mb-0">
        BPD berperan sebagai <strong>mitra kerja Kepala Desa</strong> dalam
        penyelenggaraan pemerintahan desa serta menjadi wadah penyaluran
        aspirasi masyarakat desa.
      </p>
    </div>
  </div>

  <!-- FUNGSI & WEWENANG -->
  <div class="row g-4 mb-4">
    <div class="col-md-6">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">📌 Fungsi BPD</h5>
          <ul class="mb-0">
            <li>Membahas dan menyepakati rancangan Peraturan Desa</li>
            <li>Menampung dan menyalurkan aspirasi masyarakat</li>
            <li>Mengawasi kinerja Kepala Desa</li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">⚙️ Tugas & Wewenang</h5>
          <ul class="mb-0">
            <li>Menghimpun aspirasi masyarakat</li>
            <li>Menyelenggarakan musyawarah desa</li>
            <li>Mengawasi peraturan dan kebijakan desa</li>
            <li>Menjaga transparansi pemerintahan desa</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- PROFIL ANGGOTA BPD -->
  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <h5 class="fw-semibold mb-4 text-center">👥 Profil Anggota BPD</h5>

      <div class="row g-4 text-center">

        <div class='col-md-3 col-sm-6'>
    <a href='detail-bpd.php?id=1' class='text-decoration-none text-dark'>
      <div class='glass-card'>
        <img src='assets/img/bpd/ketua.jpg' class='w-100 bpd-photo'>
        <div class='card-body text-center'>
          <h6 class='bpd-name mb-1'>H. Ahmad Sudirman</h6>
          <span class='bpd-role'>Ketua BPD</span>
        </div>
      </div>
    </a>
  </div>

        <div class='col-md-3 col-sm-6'>
    <a href='detail-bpd.php?id=1' class='text-decoration-none text-dark'>
      <div class='glass-card'>
        <img src='assets/img/bpd/ketua.jpg' class='w-100 bpd-photo'>
        <div class='card-body text-center'>
          <h6 class='bpd-name mb-1'>H. Ahmad Sudirman</h6>
          <span class='bpd-role'>Wakil Ketua BPD</span>
        </div>
      </div>
    </a>
  </div>

        <div class='col-md-3 col-sm-6'>
    <a href='detail-bpd.php?id=1' class='text-decoration-none text-dark'>
      <div class='glass-card'>
        <img src='assets/img/bpd/ketua.jpg' class='w-100 bpd-photo'>
        <div class='card-body text-center'>
          <h6 class='bpd-name mb-1'>H. Ahmad Sudirman</h6>
          <span class='bpd-role'>Sekretaris BPD</span>
        </div>
      </div>
    </a>
  </div>

        <div class='col-md-3 col-sm-6'>
    <a href='detail-bpd.php?id=3' class='text-decoration-none text-dark'>
      <div class='glass-card'>
        <img src='assets/img/bpd/sekretaris.jpg' class='w-100 bpd-photo'>
        <div class='card-body text-center'>
          <h6 class='bpd-name mb-1'>Siti Aminah</h6>
          <span class='bpd-role'>Bendahara BPD</span>
        </div>
      </div>
    </a>
  </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- PERAN STRATEGIS -->
  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <h5 class="fw-semibold mb-3">🌱 Peran BPD dalam Pembangunan Desa</h5>
      <p class="mb-0">
        BPD berperan sebagai penghubung antara masyarakat dan pemerintah desa
        dalam mendorong pembangunan yang partisipatif, transparan,
        dan berkelanjutan.
      </p>
    </div>
  </div>

  <!-- DASAR HUKUM -->
  <div class="card shadow-sm">
    <div class="card-body">
      <h5 class="fw-semibold mb-3">⚖️ Dasar Hukum</h5>
      <ul class="mb-0">
        <li>UU No. 6 Tahun 2014 tentang Desa</li>
        <li>PP No. 43 Tahun 2014</li>
        <li>PP No. 47 Tahun 2015</li>
        <li>Permendagri terkait BPD</li>
      </ul>
    </div>
  </div>

  <p class="fst-italic text-muted mt-4">
    Informasi ini disajikan sebagai bentuk transparansi dan akuntabilitas
    pemerintahan Desa Subang kepada masyarakat.
  </p>

</div>

HTML;

include 'template-lembaga.php';
