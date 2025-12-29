<?php
$nama  = $_POST['nama'];
$pesan = $_POST['pesan'];

$admin_number = "6285723047159"; // nomor admin

$token    = "YOUR_WHATSAPP_CLOUD_API_TOKEN";
$phone_id = "YOUR_PHONE_NUMBER_ID";

$msg = "📢 *ASPIRASI BARU*\n"
     . "👤 Nama: $nama\n"
     . "💬 Pesan: $pesan";

$url = "https://graph.facebook.com/v17.0/$phone_id/messages";

$data = [
  "messaging_product" => "whatsapp",
  "to"                => $admin_number,
  "text"              => [ "body" => $msg ]
];

$options = [
  "http" => [
    "method"  => "POST",
    "header"  => "Content-type: application/json\r\nAuthorization: Bearer $token\r\n",
    "content" => json_encode($data)
  ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

// setelah selesai, kembali ke index.php dg pesan sukses
header("Location: index.php?sukses=1");
exit;
?>
