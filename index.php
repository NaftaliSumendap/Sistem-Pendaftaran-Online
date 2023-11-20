<?php
require 'SCRIPT/functions.php';
if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE nama='$username'");
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      header("Location: Halaman Utama/MainPage.php");
      exit;
    }
  }

  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&family=Pacifico&display=swap" rel="stylesheet" />

  <script src="https://unpkg.com/feather-icons"></script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pendaftaran</title>
  <link rel="stylesheet" href="CSS/style.css" />
  <script src="SCRIPT/script.js"></script>
</head>

<body>
  <div class="login-container">
    <h2>Login</h2>
    <?php if (isset($error)) : ?>
      <p style="color: red; font-style: italic;">Username / password salah</p>
    <?php endif; ?>
    <form action="" method="post">
      <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required />
        <input type="submit" name="submit" value="Login" />
    </form>
  </div>
  <p>Belum punya akun? <a href="../Sistem-Pendaftaran-Online2/Daftar/index.php">Daftar disini</a></p>
  </div>

  <!-- Feather Icons-->
  <script>
    feather.replace();
  </script>
</body>

</html>