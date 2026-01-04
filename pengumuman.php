<?php
include 'koneksi.php';

$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';

if ($keyword != '') {
    $query = mysqli_query($conn, "
        SELECT * FROM pengumuman
        WHERE judul LIKE '%$keyword%'
        OR isi LIKE '%$keyword%'
        ORDER BY tanggal DESC
    ");
} else {
    $query = mysqli_query($conn, "
        SELECT * FROM pengumuman
        ORDER BY tanggal DESC
    ");
}
?>

<?php if (mysqli_num_rows($query) > 0): ?>
  <div class="row">
    <?php while ($row = mysqli_fetch_assoc($query)): ?>
      <div class="col-md-4 mb-3">
        <div class="pengumuman-card">
          <small><?= date('d M Y', strtotime($row['tanggal'])) ?></small>
          <h6><?= $row['judul'] ?></h6>
          <p><?= substr($row['isi'], 0, 100) ?>...</p>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
<?php else: ?>
  <div class="alert alert-warning">
    ❌ Data tidak ditemukan
  </div>
<?php endif; ?>
