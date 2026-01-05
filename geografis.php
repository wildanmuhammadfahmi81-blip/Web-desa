<?php
$judul = "Geografis & Geologi";
$subjudul = "Kondisi wilayah, penggunaan lahan, dan data resmi Desa Subang";

$konten = "
<div class='geografis-desa'>

  <!-- INFO LOKASI -->
  <div class='card shadow-sm mb-4'>
    <div class='card-body'>
      <h5 class='fw-semibold mb-3'>📍 Letak & Koordinat Geografis</h5>

      <p>
      Desa Subang berada di <strong>Kecamatan Subang, Kabupaten Kuningan,
      Provinsi Jawa Barat</strong>. Secara geografis, wilayah desa ini
      berada pada koordinat:
      </p>

      <div class='row'>
        <div class='col-md-6'>
          <ul class='mb-0'>
            <li><strong>Lintang</strong> : 6°58′ LS</li>
            <li><strong>Bujur</strong> : 108°28′ BT</li>
          </ul>
        </div>
        <div class='col-md-6'>
          <ul class='mb-0'>
            <li><strong>Ketinggian</strong> : ±450 mdpl</li>
            <li><strong>Luas Wilayah</strong> : ±425 Ha</li>
          </ul>
        </div>
      </div>

      <p class='fst-italic text-muted mt-3 mb-0'>
        Koordinat ini digunakan sebagai acuan administrasi dan perencanaan wilayah desa.
      </p>
    </div>
  </div>

  <!-- BATAS WILAYAH -->
  <div class='card shadow-sm mb-4'>
    <div class='card-body'>
      <h5 class='fw-semibold mb-3'>🗺️ Batas Wilayah Administratif</h5>
      <div class='row'>
        <div class='col-md-6'>
          <ul>
            <li>Utara : Desa A</li>
            <li>Selatan : Desa B</li>
          </ul>
        </div>
        <div class='col-md-6'>
          <ul>
            <li>Barat : Desa C</li>
            <li>Timur : Desa D</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- GRAFIK LAHAN -->
  <div class='card shadow-sm mb-4'>
    <div class='card-body'>
      <h5 class='fw-semibold mb-2'>🌾 Penggunaan Lahan Desa</h5>
      <p class='text-muted small'>
        Persentase penggunaan lahan di Desa Subang berdasarkan sektor utama.
      </p>

      <div class='row justify-content-center'>
        <div class='col-md-6 col-lg-5'>
          <canvas id='grafikLahan' height='180'></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- GEOLOGI -->
  <div class='card shadow-sm mb-4'>
    <div class='card-body'>
      <h5 class='fw-semibold mb-3'>⛰️ Kondisi Geologi & Topografi</h5>
      <p class='mb-0'>
        Wilayah Desa Subang memiliki kontur <strong>datar hingga perbukitan ringan</strong>
        dengan jenis tanah dominan berupa <strong>lempung subur</strong>,
        sehingga sangat mendukung sektor pertanian dan perkebunan rakyat.
      </p>
    </div>
  </div>

  <!-- DATA BPS -->
  <div class='card shadow-sm'>
    <div class='card-body'>
      <h5 class='fw-semibold mb-3'>📊 Data Resmi BPS / Profil Desa</h5>

      <div class='row'>
        <div class='col-md-6'>
          <ul>
            <li>Jumlah Penduduk: ±3.250 Jiwa</li>
            <li>Jumlah KK: ±980 KK</li>
            <li>Kepadatan Penduduk: ±7,6 Jiwa/Ha</li>
          </ul>
        </div>
        <div class='col-md-6'>
          <ul>
            <li>Mata Pencaharian Utama: Pertanian</li>
            <li>Komoditas Unggulan: Padi & Jagung</li>
            <li>Jumlah Dusun: 4 Dusun</li>
          </ul>
        </div>
      </div>

      <p class='fst-italic text-muted mt-3 mb-0'>
        Data bersumber dari Profil Desa dan publikasi Badan Pusat Statistik (BPS).
      </p>
    </div>
  </div>

</div>

<script>
const ctx = document.getElementById('grafikLahan');

new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: [
      'Pertanian',
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
        '#adb5bd'
      ],
      borderWidth: 1
    }]
  },
  options: {
    cutout: '65%',
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
