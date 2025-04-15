<?php
$host = "localhost";
$user = "root"; // sesuaikan dengan username
$pass = "alfin363";     // sesuaikan dengan password
$db   = "perpustakaan";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
