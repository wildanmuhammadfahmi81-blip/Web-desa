<?php
$judul = "Demografis Desa";
$subjudul = "Data kependudukan dan kondisi sosial masyarakat Desa Subang";

$konten = "
<h4 class='mb-3'>Demografi Penduduk</h4>

<p>
Data demografis memberikan gambaran kondisi penduduk Desa Subang
berdasarkan jumlah, jenis kelamin, pendidikan, dan mata pencaharian.
Data ini menjadi dasar perencanaan pembangunan desa.
</p>

<div class='row text-center my-4'>
  <div class='col-md-3'>
    <div class='card shadow-sm p-3'>
      <h5 class='text-success'>3.245</h5>
      <p class='mb-0'>Jumlah Penduduk</p>
    </div>
  </div>
  <div class='col-md-3'>
    <div class='card shadow-sm p-3'>
      <h5 class='text-primary'>1.650</h5>
      <p class='mb-0'>Laki-laki</p>
    </div>
  </div>
  <div class='col-md-3'>
    <div class='card shadow-sm p-3'>
      <h5 class='text-danger'>1.595</h5>
      <p class='mb-0'>Perempuan</p>
    </div>
  </div>
  <div class='col-md-3'>
    <div class='card shadow-sm p-3'>
      <h5 class='text-warning'>925</h5>
      <p class='mb-0'>Kepala Keluarga</p>
    </div>
  </div>
</div>

<h5 class='mt-5 mb-3 text-center'>Grafik Mata Pencaharian</h5>

<div class='card shadow-sm p-4'>
  <canvas id='grafikKerja'></canvas>
</div>

<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
<script>
new Chart(document.getElementById('grafikKerja'), {
  type: 'pie',
  data: {
    labels: ['Petani', 'Pedagang', 'PNS', 'Wiraswasta', 'Lainnya'],
    datasets: [{
      data: [45, 20, 10, 15, 10],
      backgroundColor: ['#198754','#0d6efd','#6f42c1','#ffc107','#dc3545']
    }]
  }
});
</script>
<p class='fst-italic text-muted mt-4'>
Data ini disusun berdasarkan hasil sensus penduduk
terbaru dan laporan administrasi kependudukan desa.
</p>
";

include 'template-lembaga.php';
