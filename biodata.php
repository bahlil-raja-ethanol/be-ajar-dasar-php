<?php
  // Logika diletakkan di atas agar lebih rapi
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_POST['username'];
      $password = $_POST['password'];

      if ($username == "admin" && $password == "123") {
          $pesan_sukses = "Login Berhasil! Selamat datang, admin";
      } else {
          echo "<script>alert('Login gagal! Username atau password salah.');</script>";
      }
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Sederhana</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <!-- Menambahkan 'required' agar tidak boleh kosong -->
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>

    <?php if (isset($pesan_sukses)) echo "<h3>$pesan_sukses</h3>"; ?>
</body>
</html>