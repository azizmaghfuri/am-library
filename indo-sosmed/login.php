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
  <title>Login</title>
</head>
<body>
  <form action="login.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" value="Login">
  </form>
</body>
</html>
