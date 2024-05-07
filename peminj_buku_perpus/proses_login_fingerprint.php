<?php
// Include SDK FlexCode
require_once 'flexcode_sdk.php';

// Fungsi untuk melakukan login menggunakan sidik jari
function loginWithFingerprint($fingerprintData) {
    // Lakukan verifikasi sidik jari di sini
    // Misalnya, lakukan pencocokan dengan data yang tersimpan di database

    // Contoh sederhana: cek apakah sidik jari yang dipindai cocok dengan data yang diharapkan
    $expectedFingerprintData = "sidik-jari-yang-tersimpan"; // Gantilah dengan data sidik jari yang tersimpan di database

    if ($fingerprintData == $expectedFingerprintData) {
        // Sidik jari cocok, lakukan login
        return true;
    } else {
        // Sidik jari tidak cocok
        return false;
    }
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data sidik jari dari form
    $fingerprintData = $_POST['fingerprint_data'];

    // Panggil fungsi login dengan sidik jari
    if (loginWithFingerprint($fingerprintData)) {
        // Login berhasil, redirect ke halaman selanjutnya
        header("Location: dashboard.php");
        exit();
    } else {
        // Login gagal, tampilkan pesan error
        $error = "Sidik jari tidak cocok. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login with Fingerprint</title>
</head>
<body>
    <h2>Login with Fingerprint</h2>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Input untuk data sidik jari -->
        <input type="text" name="fingerprint_data" placeholder="Fingerprint Data" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
