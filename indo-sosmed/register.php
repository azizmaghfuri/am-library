<?php

include_once 'config.php';

// Cek apakah ada sesi login
if (isset($_SESSION['username'])) {
  // Jika ada, arahkan ke halaman utama
  header('Location: index.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
</head>
<body>
  <form action="register.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirm_password" placeholder="Konfirmasi Password">
    <input type="submit" value="Register">
  </form>
</body>
</html>
