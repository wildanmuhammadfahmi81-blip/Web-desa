<?php
$judul = "Geografis & Geologi";
$subjudul = "Kondisi wilayah, penggunaan lahan, dan data resmi Desa Subang";

$konten = "
<h4 class='mb-3'>📍 Letak & Koordinat Geografis</h4>

<p>
Desa Subang terletak di wilayah <strong>Kecamatan Subang,
Kabupaten Kuningan, Provinsi Jawa Barat</strong>.
Secara geografis desa ini berada pada koordinat:
</p>

<ul>
  <li><strong>Lintang</strong> : 6°58′ LS</li>
  <li><strong>Bujur</strong> : 108°28′ BT</li>
  <li><strong>Ketinggian</strong> : ±450 mdpl</li>
</ul>

<p class='text-muted fst-italic'>
Koordinat ini digunakan sebagai acuan administrasi dan perencanaan wilayah desa.
</p>

<hr class='my-4'>

<h4>🗺️ Batas & Luas Wilayah</h4>
<p>
Desa Subang memiliki luas wilayah sekitar <strong>±425 hektar</strong>
dengan batas administratif sebagai berikut:
</p>

<ul>
  <li>Utara : Desa A</li>
  <li>Selatan : Desa B</li>
  <li>Barat : Desa C</li>
  <li>Timur : Desa D</li>
</ul>

<hr class='my-4'>

<h4>🌾 Grafik Penggunaan Lahan</h4>
<p>
Komposisi penggunaan lahan Desa Subang didominasi oleh sektor
pertanian dan permukiman, sebagaimana tergambar pada grafik berikut:
</p>

<div class='card shadow-sm p-4 mb-4'>
  <canvas id='grafikLahan' height='120'></canvas>
</div>

<hr class='my-4'>

<h4>⛰️ Kondisi Geologi & Topografi</h4>
<p>
Wilayah Desa Subang memiliki kontur <strong>datar hingga perbukitan ringan</strong>.
Jenis tanah yang dominan adalah tanah lempung subur,
sangat cocok untuk pertanian dan perkebunan rakyat.
</p>

<hr class='my-4'>

<h4>📊 Data BPS / Profil Desa</h4>
<p>
Berdasarkan data Profil Desa dan Badan Pusat Statistik (BPS),
Desa Subang memiliki karakteristik sebagai berikut:
</p>

<div class='row'>
  <div class='col-md-6'>
    <ul>
      <li>Jumlah Penduduk: ±3.250 jiwa</li>
      <li>Jumlah KK: ±980 KK</li>
      <li>Kepadatan Penduduk: ±7,6 jiwa/ha</li>
    </ul>
  </div>
  <div class='col-md-6'>
    <ul>
      <li>Mata Pencaharian Utama: Pertanian</li>
      <li>Komoditas Unggulan: Padi, Jagung</li>
      <li>Jumlah Dusun: 4 Dusun</li>
    </ul>
  </div>
</div>

<p class='fst-italic text-muted mt-4'>
Data ini digunakan sebagai dasar perencanaan pembangunan desa
dan disesuaikan dengan Profil Desa serta publikasi BPS setempat.
</p>

<script>
const ctx = document.getElementById('grafikLahan').getContext('2d');

new Chart(ctx, {
  type: 'pie',
  data: {
    labels: [
      'Lahan Pertanian',
      'Permukiman',
      'Perkebunan',
      'Fasilitas Umum',
      'Lainnya'
    ],
    datasets: [{
      data: [45, 25, 15, 10, 5],
      backgroundColor: [
        '#198754',
        '#0d6efd',
        '#20c997',
        '#ffc107',
        '#6c757d'
      ]
    }]
  },
  options: {
    plugins: {
      legend: {
        position: 'bottom'
      }
    }
  }
});
</script>
";

include 'template-lembaga.php';
