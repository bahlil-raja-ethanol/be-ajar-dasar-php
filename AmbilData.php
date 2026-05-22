<?php
$hasil = "";
$error = "";

if (isset($_POST['submit'])) {
    // Ambil dan bersihkan data
    $nama   = htmlspecialchars(trim($_POST['nama']), ENT_QUOTES, 'UTF-8');
    $umur   = filter_var($_POST['umur'], FILTER_SANITIZE_NUMBER_INT);
    $alamat = htmlspecialchars(trim($_POST['alamat']), ENT_QUOTES, 'UTF-8');

    // Validasi
    if (empty($nama) || empty($umur) || empty($alamat)) {
        $error = "Semua data harus diisi dengan benar!";
    } else {
        $hasil = "<h3>Hasil:</h3>
                  Nama: $nama <br>
                  Umur: $umur tahun <br>
                  Alamat: $alamat";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Biodata</title>
    <style>
        body { font-family: sans-serif; margin: 40px; line-height: 1.6; }
        .error { color: red; font-weight: bold; }
        .hasil-box { margin-top: 20px; padding: 15px; border: 1px solid #ddd; background: #f9f9f9; }
    </style>
</head>
<body>

    <h2>Form Biodata</h2>

    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" min="1" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required></textarea><br><br>

        <button type="submit" name="submit">Kirim Data</button>
    </form>

    <!-- Tampilkan Pesan Error -->
    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <!-- Tampilkan Hasil -->
    <?php if ($hasil): ?>
        <div class="hasil-box">
            <?php echo $hasil; ?>
        </div>
    <?php endif; ?>

</body>
</html>