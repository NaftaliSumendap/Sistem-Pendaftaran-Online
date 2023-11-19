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
  <link rel="stylesheet" href="style.css" />
  <script src="SCRIPT/script.js"></script>
</head>

<body>
  <main id="container">
    <div>
      <form action="#" id="form-pinjam" method="POST">
        <p>
          <label for="nama">Nama:</label>
          <input type="text" name="nama" id="nama" placeholder="Enter Your Name" required />
        </p>
        <p>
          <label for="nomor">Nomor:</label>
          <input type="tel" name="nomor" id="nomor" placeholder="Enter Your Number" required />
        </p>
        <p>
          <label for="email">Email:</label>
          <input type="text" placeholder="Enter Your E-mail" name="email" id="email" required><br>
        <p>
        <p>
          <label for="password">Password:</label>
          <input type="password" placeholder="Enter Your Password" name="pass" id="pass" required><br>
        <p>
        <p>
          <label for="re-password">Repeat Password:</label>
          <input type="password" placeholder="Re-enter Your Password" name="re-pass" id="re-pass" required><br>
        <p>
          <input id="myButton" type="submit" name="submit" onclick="myFunction()" value="Submit">
        <div>
          <a href="../index.php" class="log-in">Log in</a>
        </div>
        </p>
      </form>
    </div>
    </form>
    <!-- Feather Icons-->
    <script>
      feather.replace();
    </script>
</body>

</html>