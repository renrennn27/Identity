<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "porto_db";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Koneksi berhasil!";
} catch(PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>