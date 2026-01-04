<?php
$judul = "Kelompok Tani";
$subjudul = "Wadah pemberdayaan dan pengembangan sektor pertanian desa";

$konten = "
<h4 class='mb-3'>Kelompok Tani</h4>

<p>
Kelompok Tani adalah kumpulan para petani yang dibentuk atas dasar
kesamaan kepentingan, kondisi lingkungan, dan komoditas pertanian
untuk meningkatkan produktivitas dan kesejahteraan petani.
</p>

<p>
Kelompok Tani Desa Subang berperan aktif dalam mendukung ketahanan
pangan desa serta meningkatkan kualitas hasil pertanian melalui
kerja sama, pembinaan, dan inovasi pertanian.
</p>

<h5 class='mt-4'>Tujuan Kelompok Tani</h5>
<ul>
  <li>Meningkatkan hasil dan kualitas produksi pertanian</li>
  <li>Memperkuat kerja sama antar petani desa</li>
  <li>Mendorong penggunaan teknologi dan inovasi pertanian</li>
  <li>Meningkatkan kesejahteraan petani dan ketahanan pangan desa</li>
</ul>

<h5 class='mt-4'>Bidang Kegiatan</h5>
<ul>
  <li>Budidaya tanaman pangan dan hortikultura</li>
  <li>Pengelolaan lahan dan irigasi</li>
  <li>Pelatihan dan penyuluhan pertanian</li>
  <li>Pengolahan hasil pertanian</li>
  <li>Kerja sama pemasaran hasil panen</li>
</ul>

<h5 class='mt-4'>Struktur Organisasi Kelompok Tani</h5>
<p>
Susunan Pengurus Kelompok Tani Desa Subang
Kecamatan Subang, Kabupaten Kuningan:
</p>

<div class='row'>
  <div class='col-md-6'>
    <ul>
      <li>Ketua</li>
      <li>Wakil Ketua</li>
      <li>Sekretaris</li>
    </ul>
  </div>
  <div class='col-md-6'>
    <ul>
      <li>Bendahara</li>
      <li>Seksi Produksi</li>
      <li>Seksi Pemasaran</li>
    </ul>
  </div>
</div>

<!-- GRAFIK HASIL PANEN -->
<h5 class='mt-5 mb-4 text-center'>Grafik Hasil Panen Desa Subang</h5>

<div class='row justify-content-center'>
  <div class='col-md-10'>
    <div class='card shadow-sm p-4'>
      <canvas id='grafikPanen' height='160'></canvas>
    </div>
  </div>
</div>

<!-- GALERI -->
<h5 class='mt-5 mb-4 text-center'>Dokumentasi Kegiatan Kelompok Tani</h5>

<div class='row g-4 fade-up'>

  <div class='col-md-4 col-sm-6'>
    <div class='galeri-card'>
      <div class='galeri-img'>
        <img src='assets/img/kelompok-tani/kegiatan1.jpeg' alt='Pengolahan Lahan'>
      </div>
      <div class='galeri-caption'>
        <h6>Pengolahan Lahan sawah</h6>
        <p>Persiapan lahan pertanian</p>
      </div>
    </div>
  </div>

  <div class='col-md-4 col-sm-6'>
    <div class='galeri-card'>
      <div class='galeri-img'>
        <img src='assets/img/kelompok-tani/kegiatan2.jpg' alt='Penanaman'>
      </div>
      <div class='galeri-caption'>
        <h6>Kegiatan Penanaman</h6>
        <p>Penanaman tanaman pangan</p>
      </div>
    </div>
  </div>

  <div class='col-md-4 col-sm-6'>
    <div class='galeri-card'>
      <div class='galeri-img'>
        <img src='assets/img/kelompok-tani/kegiatan3.jpg' alt='Panen'>
      </div>
      <div class='galeri-caption'>
        <h6>Masa Panen</h6>
        <p>Pemanenan hasil pertanian</p>
      </div>
    </div>
  </div>

</div>

<p class='fst-italic text-muted mt-4'>
Informasi ini disajikan sebagai bentuk transparansi kegiatan
Kelompok Tani kepada masyarakat Desa Subang.
</p>

<!-- CHART JS -->
<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>

<script>
const ctx = document.getElementById('grafikPanen').getContext('2d');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Padi', 'Jagung', 'Singkong', 'Cabai', 'Sayuran'],
    datasets: [{
      label: 'Hasil Panen (Ton)',
      data: [150, 75, 90, 10, 85],
      backgroundColor: [
        '#9bf2c9ff',
        '#20c997',
        '#0d6efd',
        '#ffc107',
        '#6f42c1'
      ],
      borderRadius: 6
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
";

include 'template-lembaga.php';
