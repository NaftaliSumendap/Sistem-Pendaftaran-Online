<?php

$conn = mysqli_connect("localhost", "root", "admin", "sis_in");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nomor = htmlspecialchars($data["nomor"]);
    $email = htmlspecialchars($data["email"]);
    $query = "INSERT INTO users VALUES (null,'$nama', $nomor, '$email', null)";
    mysqli_query($conn, $query);

    return mysqli_affected_rows(($conn));
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM users WHERE id=$id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nomor = htmlspecialchars($data["nomor"]);
    $email = htmlspecialchars($data["email"]);

    $query = "UPDATE users SET nama = '$nama', nomor = '$nomor', email = '$email' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function register($data)
{
    global $conn;
    $username = strtolower(stripslashes($data["nama"]));
    $nomor = htmlspecialchars($data["nomor"]);
    $email = htmlspecialchars($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["pass"]);
    $password2 = mysqli_real_escape_string($conn, $data["re-pass"]);

    $result = mysqli_query($conn, "SELECT nama FROM users WHERE nama='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('Username telah digunakan');
            </script>";
        return false;
    }

    if ($password !== $password2) {
        echo "<script>
            alert('Password tidak sesuai!');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users VALUES(null, '$username', $nomor, '$email', '$password')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
