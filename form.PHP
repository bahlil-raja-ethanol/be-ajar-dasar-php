<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <style>
        body { font-family: sans-serif; margin: 20px; }
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>

    <h2>Form Biodata</h2>

    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="umur">Umur:</label><br>
        <input type="number" id="umur" name="umur" min="1" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat" required><br><br>

        <button type="submit" name="submit">Kirim</button>
    </form>

    <?php
    // Memeriksa apakah tombol submit telah ditekan
    if (isset($_POST['submit'])) {
        $nama   = trim($_POST['nama']);
        $umur   = trim($_POST['umur']);
        $alamat = trim($_POST['alamat']);

        // Validasi jika input kosong
        if ($nama == "" || $umur == "" || $alamat == "") {
            echo "<p class='error'>Semua data harus diisi!</p>";
        } else {
            // Mengamankan input dari karakter khusus dan XSS menggunakan htmlspecialchars
            $nama   = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
            $umur   = htmlspecialchars($umur, ENT_QUOTES, 'UTF-8');
            $alamat = htmlspecialchars($alamat, ENT_QUOTES, 'UTF-8');

            echo "<h3>Hasil:</h3>";
            echo "Nama: $nama <br>";
            echo "Umur: $umur <br>";
            echo "Alamat: $alamat <br>";
        }
    }
    ?>

</body>
</html>