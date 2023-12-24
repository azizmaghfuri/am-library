<?php

include_once 'config.php';

// Cek apakah ada sesi login
if (!isset($_SESSION['username'])) {
  // Jika tidak ada, arahkan ke halaman login
  header('Location: login.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Halaman Utama</title>
</head>
<body>
  <h1>Selamat datang, <?php echo $_SESSION['username']; ?></h1>
  <a href="logout.php">Logout</a>
</body>
</html>
