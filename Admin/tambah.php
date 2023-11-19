<?php
require '../SCRIPT/functions.php';
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
             alert('data berhasil ditambahkan');
             document.location.href = 'index.php';
             </script>";
    } else {
        echo "<script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>";
    }
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
    <link rel="stylesheet" href="../Daftar/style.css" />
    <script src="SCRIPT/script.js"></script>
</head>

<body>
    <main>
        <div>
            <h1>Tambah data user</h1>
        </div>
        <div>
            <form action="" method="POST">
                <p>
                    <lable for="nrp">Nama : </label>
                        <input type="text" placeholder="Enter name" name="nama" id="nrp">
                </p>
                <p>
                    <lable for="nomor">Nomor : </label>
                        <input type="tel" placeholder="Enter number" name="nomor" id="nomor">
                </p>
                <p>
                    <lable for="email">Email : </label>
                        <input type="email" placeholder="Enter email" name="email" id="email">
                </p>
                <input id="myButton" type="submit" name="submit" onclick="myFunction()" value="Submit">
            </form>
        </div>
    </main>
    <!-- Feather Icons-->
    <script>
        feather.replace();
    </script>
</body>

</html>