<?php
$judul = "Demografis Desa";
$subjudul = "Data kependudukan dan kondisi sosial masyarakat Desa Subang";

$konten = "
<div class='demografis-desa'>

  <!-- PENJELASAN -->
  <div class='card shadow-sm mb-4'>
    <div class='card-body'>
      <h5 class='fw-semibold mb-3'>👥 Gambaran Umum Kependudukan</h5>
      <p class='mb-0'>
        Data demografis memberikan gambaran kondisi penduduk Desa Subang
        berdasarkan jumlah, jenis kelamin, dan struktur keluarga.
        Data ini menjadi dasar perencanaan pembangunan desa yang
        berkelanjutan dan tepat sasaran.
      </p>
    </div>
  </div>

  <!-- STATISTIK UTAMA -->
  <div class='row text-center g-4 mb-4'>

    <div class='col-md-3 col-sm-6'>
      <div class='card shadow-sm h-100'>
        <div class='card-body'>
          <h3 class='fw-bold text-success mb-1'>3.245</h3>
          <p class='mb-0 text-muted'>Jumlah Penduduk</p>
        </div>
      </div>
    </div>

    <div class='col-md-3 col-sm-6'>
      <div class='card shadow-sm h-100'>
        <div class='card-body'>
          <h3 class='fw-bold text-primary mb-1'>1.650</h3>
          <p class='mb-0 text-muted'>Laki-laki</p>
        </div>
      </div>
    </div>

    <div class='col-md-3 col-sm-6'>
      <div class='card shadow-sm h-100'>
        <div class='card-body'>
          <h3 class='fw-bold text-danger mb-1'>1.595</h3>
          <p class='mb-0 text-muted'>Perempuan</p>
        </div>
      </div>
    </div>

    <div class='col-md-3 col-sm-6'>
      <div class='card shadow-sm h-100'>
        <div class='card-body'>
          <h3 class='fw-bold text-warning mb-1'>925</h3>
          <p class='mb-0 text-muted'>Kepala Keluarga</p>
        </div>
      </div>
    </div>

  </div>

  <!-- GRAFIK PEKERJAAN -->
  <div class='card shadow-sm mb-4'>
    <div class='card-body'>
      <h5 class='fw-semibold mb-2'>📊 Mata Pencaharian Penduduk</h5>
      <p class='text-muted small'>
        Komposisi mata pencaharian utama masyarakat Desa Subang.
      </p>

      <div class='row justify-content-center'>
        <div class='col-md-6 col-lg-5'>
          <canvas id='grafikKerja' height='180'></canvas>
        </div>
      </div>
    </div>
  </div>

  <!-- KETERANGAN -->
  <div class='card shadow-sm'>
    <div class='card-body'>
      <h5 class='fw-semibold mb-3'>📌 Keterangan Data</h5>
      <p class='fst-italic text-muted mb-0'>
        Data demografis ini disusun berdasarkan hasil sensus penduduk
        terbaru dan laporan administrasi kependudukan Desa Subang,
        serta digunakan sebagai dasar kebijakan dan perencanaan desa.
      </p>
    </div>
  </div>

</div>

<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
<script>
new Chart(document.getElementById('grafikKerja'), {
  type: 'doughnut',
  data: {
    labels: ['Petani', 'Pedagang', 'PNS', 'Wiraswasta', 'Lainnya'],
    datasets: [{
      data: [45, 20, 10, 15, 10],
      backgroundColor: [
        '#198754',
        '#0d6efd',
        '#6f42c1',
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
