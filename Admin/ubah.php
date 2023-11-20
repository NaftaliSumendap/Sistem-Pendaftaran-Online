<?php
require '../SCRIPT/functions.php';

$id = $_GET["id"];

$usr = query("SELECT * FROM users WHERE id=$id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
             alert('data berhasil diubah');
             document.location.href = 'index.php';
             </script>";
    } else {
        echo "<script>
        alert('data gagal diubah');
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
    <title>Update Data</title>
    <link rel="stylesheet" href="../Daftar/style.css" />
    <script src="SCRIPT/script.js"></script>
</head>

<body>
    <main>
        <div>
            <h1>Update data user</h1>
        </div>
        <div>
            <form action="" method="POST">
                <input type="hidden" name="id" value="<?= $usr["id"]; ?>">
                <p>
                    <lable for="nama">Nama : </label>
                        <input type="text" placeholder="Enter new name" name="nama" id="namas" value="<?= $usr["nama"]; ?>">
                </p>
                <p>
                    <lable for="nomor">Nomor : </label>
                        <input type="tel" placeholder="Enter new number" name="nomor" id="nomor" value="<?= $usr["nomor"]; ?>">
                </p>
                <p>
                    <lable for="email">Email : </label>
                        <input type="email" placeholder="Enter new email" name="email" id="email" value="<?= $usr["email"]; ?>">
                </p>
                <!-- <p>
                    <lable for="password">Password : </label>
                        <input type="text" placeholder="Enter new password" name="password" id="password">
                </p> -->
                <input id="myButton" type="submit" name="submit" onclick="myFunction()" value="Ubah">
            </form>
        </div>
    </main>
    <!-- Feather Icons-->
    <script>
        feather.replace();
    </script>
</body>

</html>