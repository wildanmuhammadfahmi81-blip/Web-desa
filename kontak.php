<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kontak & Aspirasi Warga</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

  <!-- CSS Lokal -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<!-- HERO -->
<section class="profil-hero">
  <div class="container text-center">
    <h1 class="fw-bold">Kontak & Aspirasi Warga</h1>
    <p class="lead">
      Sampaikan pesan, saran, dan aspirasi Anda kepada
      Pemerintah Desa Subang secara langsung.
    </p>
  </div>
</section>


<!-- KONTAK & ASPIRASI -->
<section class="kontak-section py-5 fade-up">
  <div class="container">
    <div class="row g-5 align-items-stretch">

    <div class="mb-4">
      <h4 class="fw-bold text-success">Layanan Aspirasi Warga</h4>
      <p class="text-muted">
        Pemerintah Desa Subang menyediakan layanan aspirasi sebagai
        sarana komunikasi resmi antara masyarakat dan pemerintah desa.
        Setiap aspirasi akan dicatat dan ditindaklanjuti sesuai ketentuan.
      </p>
    </div>

<div class="mb-4">
  <h6 class="fw-bold">📝 Alur Penanganan Aspirasi</h6>
  <ol class="small text-muted">
    <li>Warga mengisi formulir aspirasi</li>
    <li>Data diverifikasi oleh admin desa</li>
    <li>Aspirasi diteruskan ke bidang terkait</li>
    <li>Ditindaklanjuti sesuai prioritas</li>
  </ol>
</div>

<div class="alert alert-success small">
  🔒 Identitas dan isi aspirasi dijaga kerahasiaannya dan
  hanya digunakan untuk keperluan pelayanan publik desa.
</div>

      <!-- INFO DESA -->
      <div class="col-md-5">
        <div class="kontak-info h-100">
          <h4 class="fw-bold mb-3">📬 Kontak Pemerintah Desa</h4>

          <p class="mb-4">
            Website resmi Pemerintah Desa Subang sebagai sarana
            komunikasi, informasi, dan pelayanan masyarakat.
          </p>

          <ul class="list-unstyled kontak-list">
            <li>📍 <strong>Alamat</strong><br>Jl. Raya Desa Subang</li>
            <li>📧 <strong>Email</strong><br>desasubang@email.com</li>
            <li>📞 <strong>Telepon</strong><br>08xxxxxxxxxx</li>
            <li>🕒 <strong>Jam Pelayanan</strong><br>Senin – Jumat (08.00 – 15.00)</li>
          </ul>
        </div>
      </div>

      <!-- FORM ASPIRASI -->
      <div class="col-md-7">
        <div class="kontak-form h-100">
          <h4 class="fw-bold mb-3">📝 Form Aspirasi Warga</h4>
          <p class="text-muted mb-4">
            Aspirasi dan masukan Anda akan kami terima
            sebagai bahan peningkatan pelayanan desa.
          </p>

          <form id="formAspirasi" action="#" method="post" onsubmit="return kirimAspirasi()">

          <!-- === NOTIFIKASI ALERT === -->
<script>
  function kirimAspirasi() {
    Swal.fire({
      title: "Aspirasi Terkirim!",
      text: "Terima kasih atas partisipasi Anda. Aspirasi Anda telah kami terima.",
      icon: "success",
      confirmButtonText: "Siap!",
      confirmButtonColor: "#28a745",
      backdrop: `
        rgba(0,0,0,0.4)
        url("https://i.gifer.com/7efs.gif")
        center top
        no-repeat
      `
    });
    return false; // mencegah reload halaman
  }
</script>

          <!-- === FORM === -->
          <form onsubmit="return kirimAspirasi()">
            <div class="mb-3">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" required placeholder="Masukkan nama lengkap">
            </div>

            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control" required placeholder="nama@email.com">
            </div>

            <div class="mb-3">
              <label class="form-label">Pesan / Aspirasi</label>
              <textarea name="pesan" rows="4" class="form-control" required placeholder="Tuliskan pesan atau aspirasi Anda..."></textarea>
            </div>

            <div class="text-end">
              <button type="submit" class="btn btn-success px-4 py-2 vibrate-on-click">
  Kirim Aspirasi
</button>
            </div>
          </form>
        </div>
      </div>

      <p class='fst-italic text-muted mt-4'>
        Informasi ini disajikan sebagai bentuk transparansi layanan
        aspirasi kepada masyarakat Desa Subang.
      </p>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Subang
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS Lokal -->
<script src="assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function kirimAspirasi() {
  Swal.fire({
    title: "Aspirasi Terkirim!",
    text: "Terima kasih! Aspirasi Anda sudah disimpan.",
    icon: "success",
    confirmButtonText: "Tutup",
  }).then(() => {

    // Reset isi form
    document.getElementById("formAspirasi").reset();

    // Scroll kembali ke atas bagian awal halaman
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });

  });

  return false; // cegah reload halaman
}
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// === SETTINGS ADMIN ===
const adminWA = "6285723047159"; // nomor admin

// === SOUND ===
const notifSound = new Audio("assets/sound/notif.mp3");

// === FORM ACTION ===
function kirimAspirasi() {
  // ambil data form
  const nama = document.querySelector("[name='nama']").value;
  const email = document.querySelector("[name='email']").value;
  const pesan = document.querySelector("[name='pesan']").value;

  // === NOTIFIKASI WA ADMIN ===
  const waText = `Aspirasi Baru%0A-----------------%0A👤 Nama: ${nama}%0A📧 Email: ${email}%0A📝 Pesan: ${pesan}`;
  const waURL = `https://api.whatsapp.com/send?phone=${adminWA}&text=${waText}`;

  // === CONFETTI (perayaan) ===
  confetti({
    particleCount: 300,
    spread: 65,
    origin: { y: 0.6 }
  });

  // === SUARA NOTIFIKASI ===
  notifSound.play();

  // === ALERT BERHASIL ===
  Swal.fire({
    title: "Aspirasi Terkirim! 🎉",
    text: "Terima kasih! Aspirasi Anda sudah disimpan & diteruskan ke admin.",
    icon: "success",
    timer: 3500,
    showConfirmButton: false,
  }).then(() => {

    // buka WA admin di tab baru
    window.open(waURL, "_blank");

    // reset form
    document.getElementById("formAspirasi").reset();

    // scroll ke atas
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  return false;
}

// === EFEK GETAR TOMBOL ===
document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".vibrate-on-click");
  buttons.forEach(btn => {
    btn.addEventListener("click", () => {
      btn.classList.add("vibrate");
      setTimeout(() => btn.classList.remove("vibrate"), 300);
    });
  });
});
</script>

<style>
/* animasi getar tombol */
.vibrate {
  animation: shake 0.2s;
}
@keyframes shake {
  0% { transform: translateX(0); }
  25% { transform: translateX(-3px); }
  50% { transform: translateX(3px); }
  75% { transform: translateX(-3px); }
  100% { transform: translateX(0); }
}
</style>

</body>
</html>
