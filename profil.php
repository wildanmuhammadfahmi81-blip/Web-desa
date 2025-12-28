<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Desa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>

<section class="profil-hero">
  <div class="container text-center">
    <h1 class="fw-bold">Profil Desa Subang</h1>
    <p class="lead">
      Desa yang menjunjung tinggi kebersamaan, kearifan lokal,
      dan pembangunan berkelanjutan.
    </p>
  </div>
</section>

<!-- === SEJARAH DESA === -->
<section class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <h3 class="section-title mb-4 text-center">Sejarah Desa</h3>

      <p>
        Tersebutlah kisah Wirananggapati, putra raja Mataram. Beliau meminta izin kepada ibunya untuk mengembara ke negeri asing (tatar Sunda), dan ibunya merestui
        kepergiannya serta membekalinya dengan pusaka <em>karembong lokcan</em>.
      </p>

      <p>
        Singkat cerita, sampailah Raden Wirananggapati ke sebuah pesantren di Desa Ciketug (Pamulihan) yang dipimpin oleh Kiai Jabasraga, dan memiliki seorang putri bernama Nyi Suka Inten.
        Para santri menghina dan memperoloknya karena penampilannya yang lusuh. Dalam kondisi tersebut,
        Raden Wirananggapati diberi tugas menjaga ladang Kiai Jabasraga.
      </p>

      <p>
        Nyi Suka Inten tertarik pada kepribadian Raden Wirananggapati. Kiai Jabasraga pun mengetahui hubungan mereka
        dan merestuinya untuk menikah. Suatu waktu, Kiai Jabasraga menyuruh Raden Wirananggapati berkunjung kembali ke Mataram.
      </p>

      <p>
        Di Mataram, Raden Wirananggapati berhasil melumpuhkan seekor banteng yang mengamuk dan merusak paseban menggunakan pusaka <em>karembong lokcan</em>.
        Melihat pusaka tersebut, raja Mataram mengakui Raden Wirananggapati sebagai anaknya, lalu menugaskannya sebagai Bupati di Subang.
      </p>

      <p>
        Raden Wirananggapati yang semula bernama <strong>Raden Mas Muryah Martapura</strong> bergelar <strong>Pangeran Adipati Anom</strong>.
        Beliau merupakan pewaris tahta Mataram kedua dari Panembahan Krapyak (Sesuhunan Adiprabu Anyakrawati Senopati Ingalaga).
      </p>

      <p>
        Kerajaan Mataram berdiri pada tahun 1586 M setelah Sutawijaya (Panembahan Senopati) berhasil merebut kekuasaan Pajang.
        Setelah beliau mangkat, tampuk kekuasaan diteruskan oleh putranya Raden Mas Jelang yang bergelar Panembahan Krapyak.
      </p>

      <p>
        Panembahan Krapyak memiliki dua istri: Ratu Tulung Ayu (prameswari/Ratu Kulon) dan Ratu Adi (istri selir).
        Dari istri pertama lahirlah tiga anak: RM. Mutyah Martapura (Adipati Anom), Adipati Pesir, dan Soraya.
        Sedangkan dari Ratu Adi lahir RM. Rangsang atau Sujatmiko Abdurahman.
      </p>

      <p>
        RM. Muryah Martapura atau Adipati Anom inilah yang kelak bernama <strong>Wirananggapati</strong>, menjadi kuwu (dalem) pertama Desa Subang sekaligus
        cikal bakal berdirinya Desa Subang. Sementara RM. Rangsang atau Sujatmiko Abdurahman kelak menjadi
        <strong>Sultan Agung</strong>, raja ketiga Kerajaan Mataram.
      </p>
    </div>
  </div>
</section>

<section class="container profil-content fade-up">
  <div class="row align-items-center g-5">

    <!-- TEKS -->
    <div class="col-md-6">
      <div class="profil-card">

        <h4>🏘️ Gambaran Umum</h4>
        <p>
          Desa Subang merupakan salah satu desa yang berada di wilayah
          Kabupaten Subang. Desa ini dikenal dengan kehidupan
          masyarakat yang rukun, aktif dalam kegiatan sosial,
          serta menjunjung tinggi nilai gotong royong.
        </p>

        <h4>📜 Sejarah Singkat</h4>
        <p>
          Desa Subang berdiri sejak tahun 1945 dan terus mengalami
          perkembangan baik dari segi pemerintahan, infrastruktur,
          maupun kesejahteraan masyarakat.
        </p>

        <h4>🗺️ Letak Geografis</h4>
        <p>
          Desa Subang memiliki wilayah yang strategis dengan
          batas desa yang jelas, serta didukung oleh akses jalan
          yang menghubungkan desa dengan pusat kecamatan.
        </p>

        <h4>🌾 Potensi Desa</h4>
        <ul>
          <li>Pertanian dan perkebunan</li>
          <li>Usaha Mikro Kecil dan Menengah (UMKM)</li>
          <li>Kegiatan sosial dan budaya masyarakat</li>
        </ul>

      </div>
    </div>

    <!-- GAMBAR -->
    <div class="col-md-6 text-center">
      <img src="assets/img/desa.jpg"
           class="img-fluid rounded-4 shadow-lg profil-img"
           alt="Desa Subang">
    </div>

  </div>
</section>

<footer class="bg-dark text-white text-center py-3">
  © <?= date('Y') ?> Pemerintah Desa Makmur
</footer>

<script src="assets/js/script.js"></script>
</body>
</html>
