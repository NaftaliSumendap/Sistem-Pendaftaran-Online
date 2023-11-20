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
