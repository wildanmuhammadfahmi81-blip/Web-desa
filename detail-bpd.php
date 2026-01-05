<?php
$data = [
  1 => [
    'nama' => 'H. Ahmad Sudirman',
    'jabatan' => 'Ketua BPD',
    'foto' => 'assets/img/bpd/ketua.jpg',
    'deskripsi' => 'Sebagai Ketua BPD, bertugas memimpin musyawarah desa,
    menyalurkan aspirasi masyarakat, serta mengawasi jalannya pemerintahan desa.'
  ],
  2 => [
    'nama' => 'Rudi Hartono',
    'jabatan' => 'Wakil Ketua BPD',
    'foto' => 'assets/img/bpd/wakil.jpg',
    'deskripsi' => 'Membantu Ketua BPD dalam menjalankan fungsi lembaga
    dan menggantikan tugas Ketua apabila berhalangan.'
  ],
  3 => [
    'nama' => 'Siti Aminah',
    'jabatan' => 'Sekretaris BPD',
    'foto' => 'assets/img/bpd/sekretaris.jpg',
    'deskripsi' => 'Bertanggung jawab dalam administrasi,
    pencatatan keputusan, dan dokumentasi kegiatan BPD.'
  ]
];

$id = $_GET['id'] ?? 1;
$anggota = $data[$id];

$judul = "Profil Anggota BPD";
$subjudul = $anggota['nama'];

$konten = "
<div class='row justify-content-center'>
  <div class='col-md-5 text-center mb-4'>
    <div class='glass-card p-3'>
      <img src='{$anggota['foto']}' class='w-100 detail-photo'>
    </div>
  </div>

  <div class='col-md-6'>
    <div class='glass-card p-4'>
      <h4 class='fw-semibold mb-1'>{$anggota['nama']}</h4>
      <span class='badge bg-success mb-3'>{$anggota['jabatan']}</span>

      <p class='mt-3'>
        {$anggota['deskripsi']}
      </p>
    </div>
  </div>
</div>
";

include 'template-lembaga.php';
