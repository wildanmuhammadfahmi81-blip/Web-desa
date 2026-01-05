<?php
$judul = "Produk Hukum Desa";
$subjudul = "Peraturan dan keputusan resmi Pemerintah Desa Subang";

$konten = "
<div class='produk-hukum'>

  <div class='alert alert-success shadow-sm'>
    <strong>📜 Informasi Produk Hukum Desa</strong><br>
    Produk hukum desa merupakan dasar penyelenggaraan pemerintahan,
    pembangunan, dan pelayanan publik di Desa Subang.
  </div>

  <!-- ================= PERDES ================= -->
  <div class='card shadow-sm mb-4'>
    <div class='card-header bg-success text-white fw-semibold'>
      📘 Peraturan Desa (PERDES)
    </div>
    <div class='card-body table-responsive'>
      <table class='table table-bordered align-middle'>
        <thead class='table-light text-center'>
          <tr>
            <th>No</th>
            <th>Nomor</th>
            <th>Tahun</th>
            <th>Tentang</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class='text-center'>1</td>
            <td>01</td>
            <td>2023</td>
            <td>Anggaran Pendapatan dan Belanja Desa (APBDes)</td>
            <td class='text-center'><span class='badge bg-success'>Berlaku</span></td>
          </tr>
          <tr>
            <td class='text-center'>2</td>
            <td>02</td>
            <td>2023</td>
            <td>RPJMDes Desa Subang</td>
            <td class='text-center'><span class='badge bg-success'>Berlaku</span></td>
          </tr>
          <tr>
            <td class='text-center'>3</td>
            <td>03</td>
            <td>2022</td>
            <td>Pengelolaan Aset Desa</td>
            <td class='text-center'><span class='badge bg-success'>Berlaku</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- ================= PERKADES ================= -->
  <div class='card shadow-sm mb-4'>
    <div class='card-header bg-primary text-white fw-semibold'>
      📕 Peraturan Kepala Desa
    </div>
    <div class='card-body table-responsive'>
      <table class='table table-bordered align-middle'>
        <thead class='table-light text-center'>
          <tr>
            <th>No</th>
            <th>Nomor</th>
            <th>Tahun</th>
            <th>Uraian</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class='text-center'>1</td>
            <td>01</td>
            <td>2023</td>
            <td>Penjabaran APBDes Tahun Anggaran 2023</td>
            <td class='text-center'><span class='badge bg-success'>Berlaku</span></td>
          </tr>
          <tr>
            <td class='text-center'>2</td>
            <td>02</td>
            <td>2022</td>
            <td>Tata Cara Pelaksanaan Pembangunan Desa</td>
            <td class='text-center'><span class='badge bg-success'>Berlaku</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- ================= KEPUTUSAN ================= -->
  <div class='card shadow-sm mb-4'>
    <div class='card-header bg-warning fw-semibold'>
      📗 Keputusan Kepala Desa
    </div>
    <div class='card-body table-responsive'>
      <table class='table table-bordered align-middle'>
        <thead class='table-light text-center'>
          <tr>
            <th>No</th>
            <th>Nomor SK</th>
            <th>Tahun</th>
            <th>Tentang</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class='text-center'>1</td>
            <td>141/01/KDS</td>
            <td>2023</td>
            <td>Penetapan Tim Pelaksana Kegiatan Desa</td>
          </tr>
          <tr>
            <td class='text-center'>2</td>
            <td>141/02/KDS</td>
            <td>2023</td>
            <td>Penetapan Pengurus BUMDes</td>
          </tr>
          <tr>
            <td class='text-center'>3</td>
            <td>141/03/KDS</td>
            <td>2022</td>
            <td>Penetapan Kader Posyandu</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- ================= LAINNYA ================= -->
  <div class='row'>
    <div class='col-md-6'>
      <div class='card shadow-sm mb-4'>
        <div class='card-header fw-semibold'>
          📙 Produk Hukum Lainnya
        </div>
        <div class='card-body'>
          <ul class='mb-0'>
            <li>Surat Edaran Kepala Desa</li>
            <li>Instruksi Kepala Desa</li>
            <li>Nota Kesepahaman (MoU)</li>
            <li>Berita Acara Musyawarah Desa</li>
          </ul>
        </div>
      </div>
    </div>

    <div class='col-md-6'>
      <div class='card shadow-sm mb-4'>
        <div class='card-header fw-semibold'>
          ⚖️ Dasar Hukum
        </div>
        <div class='card-body'>
          <ul class='mb-0'>
            <li>UU No. 6 Tahun 2014 tentang Desa</li>
            <li>PP No. 43 Tahun 2014</li>
            <li>Permendagri No. 111 Tahun 2014</li>
            <li>Permendagri No. 20 Tahun 2018</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <p class='fst-italic text-muted mt-4'>
    Seluruh produk hukum desa ini dipublikasikan sebagai bentuk
    transparansi dan keterbukaan informasi publik kepada masyarakat.
  </p>

</div>
";

include 'template-lembaga.php';
