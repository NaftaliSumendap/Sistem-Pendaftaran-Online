<?php
require '../SCRIPT/functions.php';
$users = query("SELECT * FROM users");
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
    <link rel="stylesheet" href="style.css" />
    <script src="SCRIPT/script.js"></script>
</head>

<body>
    <main>
        <div>
            <h1>Daftar User</h1>
            <a href="tambah.php">Tambah data user</a>
        </div>
        <div>
            <table border="1" cellpading="10" cellspacing="0">
                <tr>
                    <th>No.</th>
                    <th>Ubah Data</th>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Nomor</th>
                    <th>Email</th>
                </tr>

                <?php $i = 1; ?>
                <?php foreach ($users as $row) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a href="ubah.php?id=<?= $row["id"]; ?>">Update</a> |
                            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Konfirmasi hapus?');">Delete</a>
                        </td>
                        <td><?= $row["id"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["nomor"]; ?></td>
                        <td><?= $row["email"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
        <!-- Feather Icons-->
        <script>
            feather.replace();
        </script>
</body>

</html>